<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Welcome', [
            'joke' => __('chuck-norris.another_joke', [], 'en'),
            'entrypoint' => 'Nested.DumpDie@dd',
        ]);
    }
}
