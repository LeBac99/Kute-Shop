<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function Category(){
    	return view('Admin.category.category');
    }
    public function addCategory(){
    	return view('Admin.category.add_category');
    }
    public function editCategory(){
    	return view('Admin.category.edit_category');
    }
}
