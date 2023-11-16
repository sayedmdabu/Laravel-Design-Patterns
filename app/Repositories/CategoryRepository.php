<?php 
namespace App\Repositories;
use App\Repositories\Interfaces\CategoryRepositorInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositorInterface
{
    public function getAllCategory()
    {
        // TODO: Implement getAllCategory() method.
        return Category::latest()->paginate(4);
    }

    public function view(){
        return;
    }

    public function storeCategory($data){
        Category::create($data);
        return;
    }

    public function edit($id){
        return Category::find($id);
    }

    public function updateCategory($data){
        $category = Category::find($data['id']);
        $category->update($data);
        return $category;
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return;
    }
}