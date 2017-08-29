<?php

namespace App\Controller;

class PagesController
{
	public function index()
	{
		return view('index');
	}

	public function menu()
    {
        return view('menu');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function credits()
    {
        return view('credits');
    }

    public function loyalty()
    {
        return view('loyalty');
    }
}