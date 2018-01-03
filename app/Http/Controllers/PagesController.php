<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

public function getHome(){
$teste = 'home da tainara';

 return view('pages.home')->with("lerolero",$teste);

}

public function getAbout(){
	return view('pages.about');
}

public function getContact(){
 return view('pages.contact');
 
}

}