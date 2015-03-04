<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index() {
		$lessons = ['My first lesson','My second lesson','My third lesson'];
		$name = '<em>John Doe</em>';
		// return view('pages.home', ['name' => $name,'lessons' => $lessons]);
		return view('pages.home', compact('lessons', 'name'));
		// return view('pages.home')->withName($name)->withLessons($lessons);
	}

	public function about() {
		return view('pages.about');
	}

}
