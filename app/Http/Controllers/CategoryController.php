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

    public function view(){
        return view('category.create');
    }

    public function store(Request $request){

        // validate data
        $data = $request->validate([
            'category_name' => 'required|unique:categories,category_name|max:200'
        ]);

        $this->categoryRepositor->storeCategory($data);

        return redirect()->route('category.list')->withSuccess('Category created successfully');
    }

    public function edit($id){
        $category = $this->categoryRepositor->edit($id);
        // dd($category);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request){
        $category = $this->categoryRepositor->updateCategory($request->all());

        return redirect()->route('category.list')->withSuccess('Category updated successfully');
    }

    public function detele($id){
        // dd($id);
        $this->categoryRepositor->deleteCategory($id);
        return redirect()->route('category.list')->withSuccess('Category delete successfully');
    }
}
