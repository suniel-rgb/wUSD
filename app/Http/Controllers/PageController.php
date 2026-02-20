<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function howItWorks()
    {
        return Inertia::render('HowItWorks');
    }

    public function earn()
    {
        return Inertia::render('Earn');
    }

    public function transparency()
    {
        return Inertia::render('Transparency');
    }

    public function developers()
    {
        return Inertia::render('Developers');
    }

    public function faq()
    {
        return Inertia::render('FAQ');
    }

    public function whitepaper()
    {
        return Inertia::render('Whitepaper');
    }

    public function terms()
    {
        return Inertia::render('Legal/Terms');
    }

    public function privacy()
    {
        return Inertia::render('Legal/Privacy');
    }

    public function risk()
    {
        return Inertia::render('Legal/Risk');
    }
}
