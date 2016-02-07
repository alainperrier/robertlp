<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lead;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	$videos = ['Tomato-Tomato', 'Go-Goat', 'Goat-With-The-Wind', 'On-the-vine', 'Shakshuka'];
    	$video = $videos[array_rand($videos)];
    	return view('home')->with('video', $video);
    }

    public function store(Request $request){

    	$this->validate($request, [
        	'email' => 'required|email|unique:leads|max:255',
    	]);

		$lead = new Lead();
		$email = $request->input('email');
		$lead->email = $email;
		$lead->save();
		return redirect()->back()->with('message', 'Merci, nous avons bien noté votre email. Soyez patient, vous en saurez plus très prochainement !');
	}
}
