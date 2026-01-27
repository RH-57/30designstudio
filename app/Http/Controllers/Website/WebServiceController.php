<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\MediaSocial;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website.services.index', compact('services'));
    }

    public function show($slug) {

        $mediasocials = Cache::remember('mediasocials', 3600, function () {
            return  MediaSocial::all();
        });

        $contact = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $faqs = Cache::remember('faqs', 3600, function () {
            return Faq::all();
        });

        // SERVICE + 3 PORTFOLIO TERBARU
        $service = Service::with([
                'images',
                'portfolios' => function ($query) {
                    $query->latest()->take(3);
                },
                'portfolios.images'
            ])
            ->where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        // MENU SERVICE
        $services = Cache::remember('services', 3600, function () {
            return Service::where('status', 'active')
                ->orderBy('name')
                ->get();
        });

        return view('website.services.show', compact(
            'service',
            'mediasocials',
            'contact',
            'services',
            'faqs'
        ));
    }
}
