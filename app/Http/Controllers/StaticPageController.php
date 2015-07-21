<?php

namespace ChoiceClaims\Http\Controllers;

class StaticPageController extends Controller {

    public function index()
    {
        return $this->showStaticPage('index');
    }

    public function about()
    {
        return $this->showStaticPage('about');
    }


    // Services Pages
    public function services()
    {
        return $this->showStaticPage('services.index');
    }

    public function servicesPba()
    {
        return $this->showStaticPage('services.pba');
    }

    public function servicesPpi()
    {
        return $this->showStaticPage('services.ppi');
    }

    public function servicesPpiRedress()
    {
        return $this->showStaticPage('services.ppiredress');
    }
    // End of Services Pages


    public function pay()
    {
        return $this->showStaticPage('won.pay');
    }

    public function contact()
    {
        return $this->showStaticPage('contact');
    }


    protected function showStaticPage($page)
    {
        return view('pages.static.' . $page, [
            'menuItem' => $page,
        ]);
    }

}