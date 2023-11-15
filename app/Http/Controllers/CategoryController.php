<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositorInterface;

class CategoryController extends Controller
{
    protected $categoryRepositor;

    public function __construct(CategoryRepositorInterface $categoryRepositor){
        $this->categoryRepositor = $categoryRepositor;
    }

    public function index(){
        $categories = $this->categoryRepositor->getAllCategory();
        // dd($category);
        return view('category.index',compact('categories'));
    }
}
