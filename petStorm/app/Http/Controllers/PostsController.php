<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Animal;

class PostsController extends Controller
{
    public function index()
    {
    	$animais = Animal::all();
    	return view('pets.index', compact('animais'));
    }

	public function create()
	{
	    return view('pets.create');
	}

	public function store(Request $request)
	{
	    Animal::create($request->all());
	    return redirect('posts');
	}


    public function show ($id)
	{
		$post = Animal::find($id);
	    return view('pets.show', compact('post'));
	}



	public function edit($id)
	{
	    $post=Animal::find($id);
	    return view('pets.edit',compact('post'));
	}

	public function update(Request $request, $id)
	{
	    Animal::find($id)->update($request->all());
	    return redirect('posts');
	}

	public function destroy($id){
		Animal::find($id)->delete();
		return redirect('posts');
	}
}
