<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkFooter extends Controller
{
    public function index()
    {
        $footers = LinkFooter::all();
        return view('layout.main', compact('footers')
        );
    }
}
