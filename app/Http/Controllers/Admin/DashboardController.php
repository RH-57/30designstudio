<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Package;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $brand = Brand::count();
        $portfolio = Portfolio::count();
        $service = Service::count();

        return view('admin.dashboards.index', compact(
            'brand',
            'portfolio',
            'service'
        ));
    }
}
