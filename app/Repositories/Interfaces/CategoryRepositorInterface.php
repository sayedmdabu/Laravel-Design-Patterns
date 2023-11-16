<?php
namespace App\Repositories\Interfaces;


interface CategoryRepositorInterface
{
    public function getAllCategory();

    public function view();

    public function storeCategory($data);

    public function edit($id);

    public function updateCategory($data);

    public function deleteCategory($id);
}