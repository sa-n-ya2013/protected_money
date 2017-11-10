<?php


namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class CategoriesController
{
    public function get() {
        return response()->json(Category::all()->toArray());
    }
}