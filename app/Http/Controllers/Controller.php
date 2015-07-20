<?php

namespace ChoiceClaims\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $request;

    protected $theme = 'grandway';

    public function __construct(Request $request)
    {
        // Load the request object into the base controller class
        $this->request = $request;

        // Share the theme we will be using with the skin
        view()->share(['theme' => $this->theme,]);
    }

}
