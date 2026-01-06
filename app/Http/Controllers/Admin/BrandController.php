<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Intervention\Image\Encoders\WebpEncoder;

class BrandController extends Controller
{
    public function index() {
        $brands = Cache::remember('brands', 3600, function () {
            return Brand::get();
        });

        return view('admin.brands.index', compact('brands'));
    }

    public function store(Request $request) {
        $request->validate([
            'name'      => 'required|string|max:50',
            'logo'      => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:4096',
        ]);

        $logoPath = null;
        if($request->hasFile('logo')) {
            $manager = new ImageManager(new Driver());
            $file = $request->file('logo');
            $image = $manager->read($file->getPathname());

            $image->scale(height: 160);
            $encoded = $image->encode(new WebpEncoder(quality:80));

            $filename = uniqid() . '.webp';
            $path = 'brands/images/' . $filename;

            Storage::disk('public')->put($path, (string) $encoded);
            $logoPath = $path;
        }

        Brand::create([
            'name'      => $request->name,
            'logo'      => $logoPath,
        ]);

        Cache::forget('brands');

        return redirect()
            ->back()
            ->with('success', 'Brand successfully created.');
    }

    public function update(Request $request, $id) {
        $brand = Brand::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:50',
            'logo'  => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:4096',
        ]);

        $logoPath = $brand->logo;

    if ($request->hasFile('logo')) {

        // 🧹 Delete old logo
        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        $manager = new ImageManager(new Driver());
        $file = $request->file('logo');
        $image = $manager->read($file->getPathname());

        $image->scale(height: 160);

        $encoded = $image->encode(new WebpEncoder(quality: 80));

        $filename = uniqid() . '.webp';
        $path = 'brands/images/' . $filename;

        Storage::disk('public')->put($path, (string) $encoded);
        $logoPath = $path;
    }

    $brand->update([
        'name' => $request->name,
        'logo' => $logoPath,
    ]);

    Cache::forget('brands');

    return redirect()
        ->back()
        ->with('success', 'Brand successfully updated.');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        $brand->delete();

        Cache::forget('brands');

        return redirect()
            ->route('brands.index')
            ->with('success', 'Brand berhasil dihapus');
    }
}
