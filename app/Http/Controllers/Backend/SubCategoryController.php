<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Helpers\SlugBuilder;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    use SlugBuilder;


    public function
    getAllSubCategory()
    {

        $categories = Category::all();
        $subcategories  = SubCategory::with('category:id,title')->latest()->get();
        // dd($subcategories[0]->category);
        return view('backend.category.allSubcategory',  compact('categories', 'subcategories'));
    }

    function storeSubCategory(Request $req)
    {

        $req->validate([
            'category_id' => 'required',
            'title' => 'required'
        ]);

        //* STORE DB
        $subCategory  = new SubCategory();
        $subCategory->category_id   = $req->category_id;
        $subCategory->title   = $req->title;
        $subCategory->slug   = $this->slugGenerator($req,SubCategory::class);
        $subCategory->save();

        return back();
    }
}
