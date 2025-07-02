<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    //
      public function index($path=null)
    {
        // Optional: Normalize the path
        $path = trim($path, '/');

    if (empty($path)) {
        return view('dashboard.index'); // Homepage view
    }
        // Check if a view exists
        if (View::exists('dashboard.' . $path)) {
            return view('dashboard.' . $path);
        }

        // Optional: Fallback for 404
        abort(404, 'Page not found');
    }
}
