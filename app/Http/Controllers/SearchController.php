<?php

namespace App\Http\Controllers;

use App\Author;
use App\Title;
use App\Type;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function SearchByAuthor()
    {
                $q = Input::get('q');
                $authors = Author::where('firstName', 'LIKE', '%' . $q . '%')->orWhere('lastName', 'LIKE', '%' . $q . '%')->get();
                $type = Type::where('name', 'LIKE', '%' . $q . '%')->get();
                $title = Title::where('name', 'LIKE', '%' . $q . '%')->get();
                if (count($authors) > 0)
                    return view('authors.result')->withDetails($authors)->withQuery($q);
                elseif(count($type)>0)
                    return view('types.result')->withDetails($type)->withQuery($q);
                elseif(count($title) > 0)
                    return view('titles.result')->withDetails($title)->withQuery($q);

                    else return view('authors.result')->withMessage('There is no match for your search!');
    }
}

