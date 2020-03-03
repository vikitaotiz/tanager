<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Categorymenu;

class CategorymenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorymenus = Categorymenu::all();

        return view('categorymenus.index', compact('categorymenus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorymenus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'title' => 'required'
        ]);

        $categorymenu = Categorymenu::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('categorymenus.show', $categorymenu->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorymenu = Categorymenu::findOrFail($id);

        return view('categorymenus.show', compact('categorymenu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorymenu = Categorymenu::findOrFail($id);

        return view('categorymenus.edit', compact('categorymenu'));
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
        $categorymenu = Categorymenu::findOrFail($id);

        $this->validate($request, [
            'title' => 'required'
        ]);

        Categorymenu::whereId($id)->update([
            'title' => $request->title,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('categorymenus.show', $categorymenu->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorymenu = Categorymenu::findOrFail($id);

        if($categorymenu->image){
            Storage::delete('public/'.$categorymenu->image);
        }

        $categorymenu->delete();

        return redirect()->route('categorymenus.index');
    }
}
