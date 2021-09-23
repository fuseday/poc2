<?php

namespace App\Http\Controllers;

use App\Torquish;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function details()
    {
        return Inertia::render('Details', [
            'bladeCounter' => view('pages.simple-counter')->render(),
        ]);
    }

    public function secret()
    {
        return Inertia::render('HtmlPage', [
            'html' => view('pages.secret')->render(),
        ]);
    }

    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function html()
    {
        return Inertia::render('HtmlPage', [
            'html' => view('pages.live-stream-demo')->render(),
        ]);
    }

    public function remoteComponents()
    {
        return Torquish::page('sales-report');
    }
}
