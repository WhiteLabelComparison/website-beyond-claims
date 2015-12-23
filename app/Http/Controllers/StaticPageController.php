<?php

namespace ChoiceClaims\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class StaticPageController extends Controller {

    public function partial($fileName)
    {
        return view("pages.static." . str_replace('/', '.', $fileName), [
            'attractions' => [
                [
                    'image' => [
                        'url' => '/assets/images/carousel/coffee.jpg',
                        'alt' => 'Coffee Table',
                    ],
                    'description' => 'Apply from the comfort of your own home',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/dog.jpg',
                        'alt' => 'husky',
                    ],
                    'description' => 'There is nothing to loose, and plenty to gain',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/group.jpg',
                        'alt' => 'Group of Friends',
                    ],
                    'description' => 'Spend more time doing the things you love',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/train.jpg',
                        'alt' => 'Phone Call',
                    ],
                    'description' => 'Quick, easy and hassle free',
                ],
            ]
        ]);
    }

    public function index()
    {
        $data = [
            'attractions' => [
                [
                    'image' => [
                        'url' => '/assets/images/carousel/coffee.jpg',
                        'alt' => 'Coffee Table',
                    ],
                    'description' => 'Apply from the comfort of your own home',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/dog.jpg',
                        'alt' => 'husky',
                    ],
                    'description' => 'There is nothing to loose, and plenty to gain',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/group.jpg',
                        'alt' => 'Group of Friends',
                    ],
                    'description' => 'Spend more time doing the things you love',
                ],
                [
                    'image' => [
                        'url' => '/assets/images/carousel/train.jpg',
                        'alt' => 'Phone Call',
                    ],
                    'description' => 'Quick, easy and hassle free',
                ],
            ]
        ];

        return $this->showStaticPage('index', $data);
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

    public function contactPost()
    {
        Mail::raw($this->request->get('message'), function($message)
        {
            $message->from($this->request->get('email'), $this->request->get('name'));
            $message->subject($this->request->get('subject'));
            $message->to('admin@beyondcomparison.com');
        });

        return back()->withErrors(['Thank you for your message, we will reply as soon as possible.']);
    }

    public function paymentComplete()
    {
        return $this->showStaticPage('paymentcomplete', [
            'transaction_id' => session('transaction'),
        ]);
    }


    protected function showStaticPage($page, Array $data = [])
    {
        return view('pages.templates.' . $page, [
            'menuItem' => $page,
        ], $data);
    }

}