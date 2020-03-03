<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;
use App\Categorymenu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorymenus = Categorymenu::all();

        return view('menus.create', compact('categorymenus'));
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
            'title' => 'required',
            'description' => 'required',
            'categorymenu_id' => 'required',
            'price' => 'required'
        ]);

        $menu = Menu::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'categorymenu_id' => $request->categorymenu_id,
            'user_id' => auth()->user()->id
        ]);

        if($request->hasFile('image')) {

            $this->validate($request, [
                'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:10000'
            ]);

            $image = $request->image->store('menu_images', 'public');

            $menu->image = $image;

            $menu->save();
        }

        return redirect()->route('menus.show', $menu->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);

        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $categorymenus = Categorymenu::all();

        return view('menus.edit', compact('menu', 'categorymenus'));
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
        $menu = Menu::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'categorymenu_id' => 'required',
            'price' => 'required'
        ]);

        Menu::whereId($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'categorymenu_id' => $request->categorymenu_id,
            'user_id' => auth()->user()->id
        ]);

        if($request->has('image')) {

            $this->validate($request, [
                'image' => 'file|image|mimes:jpeg,jpg,png,gif|max:10000'
            ]);

            if($menu->image){
                Storage::delete('public/'.$menu->image);
            }

            $image = $request->image->store('menu_images', 'public');

            $menu->image = $image;

            $menu->save();
        }

        return redirect()->route('menus.show', $menu->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);

        if($menu->image){
            Storage::delete('public/'.$menu->image);
        }

        $menu->delete();

        return redirect()->route('menus.index');
    }
}
