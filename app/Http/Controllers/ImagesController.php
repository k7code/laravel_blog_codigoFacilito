<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$images = Image::orderBy('article_id' , 'DESC')->paginate(3);
		$images->each(function ($images){
			$images->article;
		});
		return view('admin.images.index')->with('images' , $images);
	}
}
