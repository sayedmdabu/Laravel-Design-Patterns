<?php
namespace App\Repositories\Interfaces;


interface CategoryRepositorInterface
{
    public function getAllCategory();

    public function storeCategory($data);
}