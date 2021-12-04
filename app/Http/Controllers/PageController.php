<?php

namespace App\Http\Controllers;

class PageController extends BaseController
{
    public function __construct()
    {
    }

    /**
     * login page
     */
    public function index()
    {
        return view('pages.index');
    }
}
