<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceImageController extends Controller
{
    public function destroy($id)
    {
        $image = ServiceImage::findOrFail($id);

        // Hapus file dari storage
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }

        // Hapus record database
        $image->delete();

        return back()->with('success', 'Gambar berhasil dihapus');
    }
}
