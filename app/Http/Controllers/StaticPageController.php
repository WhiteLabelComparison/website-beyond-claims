<?php

namespace ChoiceClaims\Http\Controllers;

class StaticPageController extends Controller {

    public function index()
    {
        return view('pages.static.index');
    }

}