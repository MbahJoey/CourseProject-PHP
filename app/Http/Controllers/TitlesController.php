<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;

class TitlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = Title::orderBy('name', 'desc')->paginate(5);
        return view('titles.index') -> with('titles', $titles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, array(
            'name' => 'required|min:3',
            'author' => 'required|min:3',
            'type' =>'required',
            'pdate' =>'required'
        ));

        //Create
        $titles = new Title;
        $titles['name'] = $request ->get('name');
        $titles['author'] = $request ->get('author');
        $titles['type'] = $request ->get('type');
        $titles['pdate'] = $request ->get('pdate');
        $titles->save();
        return redirect('/titles') -> with('success', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titles = Title::find($id);
        return view('titles.show') -> with('titles', $titles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titles = Title::find($id);
        return view('titles.edit') -> with('titles', $titles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        //Validation
        $this->validate($request, array(
            'name' => 'required|min:3',
            'author' => 'required|min:3',
            'type' =>'required',
            'pdate' =>'required'
        ));

        //Update
        $titles = Title::find($id);
        $titles['name'] = $request ->get('name');
        $titles['author'] = $request ->get('author');
        $titles['type'] = $request ->get('type');
        $titles['pdate'] = $request ->get('pdate');
        $titles->save();
        return redirect('/titles') -> with('update', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $titles = Title::find($id);
        $titles->delete();

        return redirect('/titles') -> with('delete', 'Deleted');
    }
}
