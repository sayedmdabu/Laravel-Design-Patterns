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

    public function storeCategory($data){
        Category::create($data);
    }
}