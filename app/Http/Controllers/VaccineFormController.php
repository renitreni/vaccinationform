<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class VaccineFormController extends Controller
{
    public function index()
    {
        Inertia::setRootView('layouts/index');

        return Inertia::render('VaccineForm', [
            'data' => [
            ],
        ]);
    }
}
