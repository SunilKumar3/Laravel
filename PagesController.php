<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class PagesController extends Controller
{
    public function index()
    {
    	if(View:: exists('pages.index'))
    		return view('pages.index')
    	->with('text','<b>Laravel</b>')
    	->with('name', 'Nicole')
    	->with(['location' => 'Europe', 'planet' =>'Earth']);
    	else
    		return 'No view available';
    }

    public function about()
    {
    	$name = '<span style="color: blue;" >Jeffrey way</span>';
    	return view('pages.about')->with('name',$name);
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }
    
    public function blade()
    {
        return view('blade.bladetest');
    }
}

