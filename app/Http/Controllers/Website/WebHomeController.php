<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebHomeController extends Controller
{
    public function index() {
        $mediasocials = Cache::remember('mediasocials', 31536000, function () {
            return  MediaSocial::all();
        });

        $contact = Cache::remember('contacts', 31536000, function () {
            return Contact::first();
        });

        $services = Cache::remember('services', 3600, function () {
            return Service::where('status', 'active')
                ->orderBy('name')
                ->get();
        });

        return view('website.index', compact(
            'mediasocials',
            'contact',
            'services',
        ));
    }
}
