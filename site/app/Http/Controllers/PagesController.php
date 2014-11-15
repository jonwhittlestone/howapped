<?php namespace Howapped\Http\Controllers;

use Howapped\Http\Controllers\Controller;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @Get("/")
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}



}
