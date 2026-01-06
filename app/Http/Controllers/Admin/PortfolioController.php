<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Cache::remember('portfolios', 3600, function () {
            return Portfolio::get();
        });

        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create() {
        $services = Cache::remember('services', 3600, function () {
            return Service::select('id', 'name')
                ->where('status', 'active')
                ->orderBy('name')
                ->get();
        });

        return view('admin.portfolios.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'service_id' => 'required|exists:services,id',
            'cover'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images'     => 'nullable|array|max:5',
            'images.*'   => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $manager = new ImageManager(new Driver());

        /** =====================
         * UPLOAD COVER
         * ===================== */
        $coverPath = null;
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');

            $image = $manager
                ->read($file->getPathname())
                ->scaleDown(width: 1600);

            $encoded = $image->encode(new WebpEncoder(quality: 75));

            $filename = uniqid() . '.webp';
            $path = 'portfolios/covers/' . $filename;

            Storage::disk('public')->put($path, (string) $encoded);
            $coverPath = $path;
            unset($image, $encoded);
        }

        /** =====================
         * CREATE PORTFOLIO
         * ===================== */
        $portfolio = Portfolio::create([
            'name'       => $request->name,
            'service_id' => $request->service_id,
            'cover'      => $coverPath,
        ]);

        /** =====================
         * UPLOAD GALLERY IMAGES
         * ===================== */
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                $image = $manager
                    ->read($file->getPathname())
                    ->scaleDown(width: 1800);

                $encoded = $image->encode(new WebpEncoder(quality: 75));

                $filename = uniqid('gallery_') . '.webp';
                $path = 'portfolios/images/' . $filename;

                Storage::disk('public')->put($path, (string) $encoded);

                $portfolio->images()->create([
                    'image' => $path,
                ]);

                unset($image, $encoded);
            }
        }

        Cache::forget('portfolios');

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio created successfully');
    }


    public function show($id) {
        $portfolio = Portfolio::with(['images', 'service'])->findOrFail($id);

        return view('admin.portfolios.show', compact('portfolio'));
    }

    public function edit($id) {
        $portfolio = Portfolio::with(['images', 'service'])->findOrFail($id);
         $services = Service::where('status', 'active')->get();

        return view('admin.portfolios.edit', compact('portfolio', 'services'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'service_id' => 'required|exists:services,id',
            'cover'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images.*'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        /* =======================
        * UPDATE DATA DASAR
        * ======================= */
        $portfolio->name       = $request->name;
        $portfolio->service_id = $request->service_id;

        /* =======================
        * UPDATE COVER (JIKA ADA)
        * ======================= */
        if ($request->hasFile('cover')) {

            // Hapus cover lama
            if ($portfolio->cover && Storage::disk('public')->exists($portfolio->cover)) {
                Storage::disk('public')->delete($portfolio->cover);
            }

            $coverPath = $request->file('cover')->store(
                'portfolios/covers',
                'public'
            );

            $portfolio->cover = $coverPath;
        }

        $portfolio->save();

        /* =======================
        * TAMBAH IMAGES BARU
        * ======================= */
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $imagePath = $image->store(
                    'portfolios/images',
                    'public'
                );

                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image'        => $imagePath,
                ]);
            }
        }

        Cache::forget('portfolios');

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio berhasil diperbarui');
    }


    public function destroy($id)
    {
        $portfolio = Portfolio::with('images')->findOrFail($id);

        // hapus cover
        if ($portfolio->cover && Storage::disk('public')->exists($portfolio->cover)) {
            Storage::disk('public')->delete($portfolio->cover);
        }

        // hapus gallery images
        foreach ($portfolio->images as $img) {
            if (Storage::disk('public')->exists($img->image)) {
                Storage::disk('public')->delete($img->image);
            }
        }

        $portfolio->delete(); // images ikut kehapus (cascade)
        Cache::forget('portfolios');

        return redirect()
            ->route('portfolios.index')
            ->with('success', 'Portfolio deleted successfully');
    }

}
