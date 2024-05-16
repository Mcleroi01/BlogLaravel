<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::latest()->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $categorie =  Categorie::create(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
        );

       


        return redirect()->route('Categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $Category)
    {
        $categories= $Category;
        return view('categories.edit', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        return view('categories.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $Category)
    {
        // $categorie= Categorie::findOrFail($id);
        $Category->update( [
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('Categories.index', compact('categorie'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $Category)
    {
        $Category->delete();
        return back()->with('success', 'suppression réussie');
    }
}
