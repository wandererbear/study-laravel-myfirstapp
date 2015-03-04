<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SongsController extends Controller {
	public function index() {
		 // $songs = ['Boyfriend', 'Be Alright', 'Fall'];
		$songs = $this->getSongs();
		return view('songs.index', compact('songs'));
	}

	// teddy "$id from route that has {id}"
	public function show($id) {
		 $song = $this->getSongs()[$id];
		 return view('songs.show', compact('song'));
	}

	public function getSongs() {
		return ['Boyfriend', 'Be Alright', 'Fall'];
	}

}
