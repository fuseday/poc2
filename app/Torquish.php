<?php

namespace App;

use Inertia\Inertia;

class Torquish
{
    public static function page(string $page)
    {
        return Inertia::render('HtmlPage', [
            'html' => view()->make("pages.{$page}")->render(),
        ]);
    }
}
