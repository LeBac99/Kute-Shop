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
    	$category = Category::where('parent_id',0)->get();
       // dd($category);
        $cateall = Category::all()->toArray();
    	//dd($cateall);
    	return view('Admin.category.category',compact('category','cateall'));
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
        if(checkgiaodien(Category::all()->toArray(),$Request->parent_id,1)>2){
             return redirect()->back()->with('thongbao','Giao diện không hỗ trợ menu 3 cấp');        
        }
        $cate = new Category();
        $cate->name = $Request->name;
        $cate->slug = Str::slug($Request->name);
        $cate->description = $Request->description;
        $cate->parent_id = $Request->parent_id;
        $cate->save();
        return redirect()->route('get.Category')->with('thongbao','Thêm thành công!');
    } 
    public function posteditCategory(addCategoryRequest $Request, $id){
        if(checkgiaodien(Category::all()->toArray(),$Request->parent_id,1)>2){
             return redirect()->back()->with('thongbao','Giao diện không hỗ trợ menu 3 cấp');        
        }
        $cate = Category::find($id);
        $cate->name = $Request->name;
        $cate->slug = Str::slug($Request->name);
        $cate->description = $Request->description;
        $cate->parent_id = $Request->parent_id;
        $cate->save();
        return redirect()->route('get.Category')->with('thongbao','Sửa thành công!');    
    }
    public function deleteCategory($id){
        $cate = Category::find($id);
        $c = Category::where('parent_id',$id)->get();
        foreach($c as $cc){
            $cc->delete();
        }
        $cate->delete();
        return redirect()->back(); 
    }
    
}
