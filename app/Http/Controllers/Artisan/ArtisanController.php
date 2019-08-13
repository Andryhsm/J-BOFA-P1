<?php

namespace App\Http\Controllers\Artisan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtisanController extends Controller
{
    public function index()
    {
        return view('artisan.page.index');
    }

    public function showAvailablePage()
    {
        return view('artisan.page.project_available');
    }

}
