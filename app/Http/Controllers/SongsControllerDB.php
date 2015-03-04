<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class SongsControllerDB extends Controller {
	public function index() {
		$songs = DB::table('songs')->get();
		return view('songsdb.index', compact('songs'));
	}

	// teddy "$id from route that has {id}"
	public function show($id) {
		 $song = DB::table('songs')->find($id);
		 return view('songsdb.show', compact('song'));
	}

}
