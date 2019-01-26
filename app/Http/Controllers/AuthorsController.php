<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index') -> with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, array(
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
        ));

        //Create
        $authors = new Author;
        $authors['firstName'] = $request ->get('firstName');
        $authors['lastName'] = $request ->get('lastName');
        $authors->save();
        return redirect('/authors') -> with('success', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $authors = Author::find($id);
        return view('authors.show') -> with('authors', $authors);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = Author::find($id);
        return view('authors.edit') -> with('authors', $authors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request, array(
            'firstName' => 'required|min:3',
            'lastName' => 'required|min:3',
        ));

        //Create
        $authors = Author::find($id);
        $authors['firstName'] = $request ->get('firstName');
        $authors['lastName'] = $request ->get('lastName');
        $authors->save();
        return redirect('/authors') -> with('update', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $authors = Author::find($id);
        $authors->delete();

        return redirect('/authors') -> with('delete', 'Deleted');
    }
}
