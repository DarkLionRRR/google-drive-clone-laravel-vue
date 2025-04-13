<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class FileController extends Controller
{
    public function myFiles(): InertiaResponse
    {
        return Inertia::render('MyFiles');
    }
}
