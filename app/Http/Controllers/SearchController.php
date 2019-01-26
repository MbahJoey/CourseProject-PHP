<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function SearchByAuthor(request $request)
    {
        $input = Input::get ( 'input' );
        $author = Author::where('firstName','LIKE','%'.$input.'%')->orWhere('lastName','LIKE','%'.$input.'%')->get();
        if (count($author) > 0) {
            return view('search')->with($author)->with($input);
        } else {
            return view('search')->withErrors('There is no match for your search!');
        }
    }
}