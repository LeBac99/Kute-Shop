<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\addCategoryRequest;
use App\Model\{Category};
class CategoryController extends Controller
{
    public function Category(){
    	$category = Category::all();
    	//dd($category);
    	return view('Admin.category.category',compact('category'));
    }
    public function addCategory(Request $Request){

    	$category = Category::all();
    	return view('Admin.category.add_category',compact('category'));
    }
    public function editCategory($id){
        //dd($id);
        $cate = Category::find($id);
        $category = Category::all();
        //dd($cate);
    	return view('Admin.category.edit_category',compact('cate','category'));
    }
    public function postAddCategory(addCategoryRequest $Request){
        $cate = new Category();
        $cate->name = $Request->name;
        $cate->slug = Str::slug($Request->name);
        $cate->description = $Request->description;
        $cate->parent_id = $Request->parent_id;
        $cate->save();
        return redirect()->route('get.Category');    
    } 
    public function posteditCategory(addCategoryRequest $Request, $id){
        $cate = Category::find($id);
        $cate->name = $Request->name;
        $cate->slug = Str::slug($Request->name);
        $cate->description = $Request->description;
        $cate->parent_id = $Request->parent_id;
        $cate->save();
        return redirect()->route('get.Category');    
    }
    public function deleteCategory($id){
        $cate = Category::find($id);
        $c = Category::where('parent_id',$id)->get();
        dd($c);
        $cate->delete();
        return redirect()->back(); 
    }
    
}
