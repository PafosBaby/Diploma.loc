<?php

namespace App\Http\Controllers;

use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasPermissionTo('view categories')) {
            return view('admin.category.index')
            ->with('categories',Category::all());
        } else {
            return abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->hasPermissionTo('create categories')){
            return view('admin.category.create');
        }else{
           return abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required','min:2','max:50', 'unique:categories'],
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Category $category)
    {
        if(Auth::user()->hasPermissionTo('edit categories')){
            return view('admin.category.edit',[
                'category' => $category
            ]);
        }else{
            return abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=> ['required','min:2','max:50', 'unique:categories,name,'.$category->id],
        ]);
        $category->update($request->all());
        return redirect()->route('categories.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if(Auth::user()->hasPermissionTo('delete categories')){
            $category->delete();
            return back();
        }else{
            return abort(403);
        }
    }
}
