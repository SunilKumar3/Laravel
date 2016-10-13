<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use App\Post;

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
        $first = 'Alex';
        $last = 'Curts';

        $fullname = $first . " " . $last;
        $email = 'alex@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname; 
    	
    	return view('pages.about')->withData($data);
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
    public function contactblog()
    {
        return view('pages.contactblog');
    }
    public function welcomeblog()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcomeblog')->withPosts($posts);
    }
    public function welcome()
    {
        return view('employees.welcome');
    }
    public function login()
    {
        return view('employees.login');
    }
    public function department()
    {
        return view('employees.department');
    }
    public function employee()
    {
        return view('employees.employee');
    }

}

