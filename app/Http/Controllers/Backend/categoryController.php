<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\SlugBuilder;

class categoryController extends Controller
{
    use SlugBuilder;

    /**
     * GET ALL CATEGORIES
     */

     public function getAllCategories()
     {
        $categories = Category::latest()->SimplePaginate(10);
       
         return view('backend.category.allCategory', compact('categories'));
     }

     /**
      * STORE CATEGORY
      */
      public function storeCategory(Request $req)
      {
         /**
          * VALIDATE
          */
          $req->validate(["title"=> 'required']);

          /**
           * STORE
           */
          $category = new Category();
          $this->storeOrUpdateCategory($category,$req);
          return back();
      }
    
      public function editCategory($slug)
      {
        $categories = Category::latest()->SimplePaginate(10);
        $editedCategory = Category::where('slug', $slug)->first();
       
        return view('backend.category.allCategory', compact('categories', 'editedCategory'));
      }

      public function updateCategory(Request $req, $slug)
      {
        
          $category = Category::where('slug', $slug)->first();
          /**
          * VALIDATE
          */
          $req->validate(["title"=> 'required']);
          $this->storeOrUpdateCategory($category,$req);
          return redirect()->route('category.all');
      }

      private function storeOrUpdateCategory($category,$req)
      {
          $category->title = $req->title;
          /**
            * SLUG GENERATE
          */
          $slug = $this->slugGenerator($req, Category::class);
          $category->slug = $slug;
          $category->save();
      }
    function deleteCategory($id)
    {
       $category = Category::find($id);
       $category->delete();
       return back();
    }
      }
    
