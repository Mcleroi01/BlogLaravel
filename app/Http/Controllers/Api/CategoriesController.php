<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat= Categorie::all();
        return response()->json($cat);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie = Categorie::create(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
        );

        return response()->json($categorie);
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        return response()->json($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        if ($categorie->delete()) {
            return response()->json(['result'=>'suppression effectuer']);
        }
    }
}
