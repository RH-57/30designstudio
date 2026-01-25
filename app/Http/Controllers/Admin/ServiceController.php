<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;

class ServiceController extends Controller
{
    public function index() {
        $services = Cache::remember('services', 3600, function () {
            return Service::get();
        });

        return view('admin.services.index', compact('services'));
    }

    public function create() {
        return view('admin.services.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'                  => 'required|string|max:100',
            'description'           => 'required|string',
            'slug'                  => 'nullable|string|max:200|unique:services,slug,',
            'headline'              => 'required|string|max:255',
            'headline_description'  => 'required|string',
            'hero_image'            => 'required|image|mimes:jpeg,jpg,png,webp|max:4096',
            'status'                => 'required|in:active,inactive',
            'meta_title'            => 'nullable|string|max:255',
            'meta_description'      => 'nullable|string',
            'meta_image'            => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4092',
        ]);

        $slug = Str::slug($request->name);

        $manager = new ImageManager(new Driver());

        $heroImagePath = null;
        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image');
            $meta = $manager->read($file->getPathname());
            $encoded = $meta->encode(new WebpEncoder(quality: 75));
            $filename = uniqid() . '.webp';
            $path = 'services/hero/' . $filename;
            Storage::disk('public')->put($path, (string) $encoded);
            $heroImagePath = $path;
        }

        $metaImagePath = null;
        if ($request->hasFile('meta_image')) {
            $file = $request->file('meta_image');
            $meta = $manager->read($file->getPathname());
            $encoded = $meta->encode(new WebpEncoder(quality: 75));
            $filename = uniqid() . '.webp';
            $path = 'services/meta/' . $filename;
            Storage::disk('public')->put($path, (string) $encoded);
            $metaImagePath = $path;
        }

        Service::create([
            'name'                  => $request->name,
            'description'           => $request->description,
            'slug'                  => $slug,
            'description'           => $request->description,
            'headline'              => $request->headline,
            'headline_description'  => $request->headline_description,
            'hero_image'            => $heroImagePath,
            'status'                => $request->status,
            'meta_title'            => $request->meta_title,
            'meta_description'      => $request->meta_description,
            'meta_image'            => $metaImagePath,
        ]);

        Cache::forget('services');

        return redirect()->route('services.index')->with('success', 'Service Created Successfully');

    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name'                  => 'required|string|max:100',
            'description'           => 'required|string',
            'slug'                  => 'nullable|string|max:200|unique:services,slug,' . $service->id,
            'headline'              => 'required|string|max:255',
            'hero_image'            => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
            'status'                => 'required|in:active,inactive',
            'meta_title'            => 'nullable|string|max:255',
            'meta_description'      => 'nullable|string',
            'meta_image'            => 'nullable|image|mimes:jpeg,jpg,png,webp|max:4096',
        ]);

        $slug = Str::slug($request->name);

        $manager = new ImageManager(new Driver());

        /** ======================
         * HERO IMAGE
         * ====================== */
        $heroImagePath = $service->hero_image;
        if ($request->hasFile('hero_image')) {

            // hapus gambar lama
            if ($service->hero_image && Storage::disk('public')->exists($service->hero_image)) {
                Storage::disk('public')->delete($service->hero_image);
            }

            $file = $request->file('hero_image');
            $image = $manager->read($file->getPathname());
            $encoded = $image->encode(new WebpEncoder(quality: 75));

            $filename = uniqid() . '.webp';
            $path = 'services/hero/' . $filename;
            Storage::disk('public')->put($path, (string) $encoded);

            $heroImagePath = $path;
        }

        /** ======================
         * META IMAGE
         * ====================== */
        $metaImagePath = $service->meta_image;
        if ($request->hasFile('meta_image')) {

            if ($service->meta_image && Storage::disk('public')->exists($service->meta_image)) {
                Storage::disk('public')->delete($service->meta_image);
            }

            $file = $request->file('meta_image');
            $image = $manager->read($file->getPathname());
            $encoded = $image->encode(new WebpEncoder(quality: 75));

            $filename = uniqid() . '.webp';
            $path = 'services/meta/' . $filename;
            Storage::disk('public')->put($path, (string) $encoded);

            $metaImagePath = $path;
        }

        $service->update([
            'name'                  => $request->name,
            'description'           => $request->description,
            'slug'                  => $slug,
            'headline'              => $request->headline,
            'hero_image'            => $heroImagePath,
            'status'                => $request->status,
            'meta_title'            => $request->meta_title,
            'meta_description'      => $request->meta_description,
            'meta_image'            => $metaImagePath,
        ]);

        Cache::forget('services');

        return redirect()
            ->route('services.index')
            ->with('success', 'Service Updated Successfully');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Hapus gambar jika ada
        if ($service->hero_image && Storage::disk('public')->exists($service->hero_image)) {
            Storage::disk('public')->delete($service->hero_image);
        }
        // Hapus gambar jika ada
        if ($service->meta_image && Storage::disk('public')->exists($service->meta_image)) {
            Storage::disk('public')->delete($service->meta_image);
        }

        $service->delete();
        Cache::forget('services');

        return redirect()->route('services.index')->with('success', 'Service berhasil dihapus');
    }
}
