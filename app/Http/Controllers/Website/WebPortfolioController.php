<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WebPortfolioController extends Controller
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

        $brands = Cache::remember('brands', 3600, function () {
            return Brand::get();
        });

        $portfolios = Cache::remember('portfolios', 3600, function () {
            return Portfolio::with(['service', 'images'])->get();
        });

        return view('website.portfolio', compact(
            'mediasocials',
            'contact',
            'services',
            'brands',
            'portfolios'
        ));
    }
}
