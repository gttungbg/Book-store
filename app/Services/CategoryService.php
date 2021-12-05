<?php

namespace App\Services;

use App\Models\Category;
use App\Services\BaseService;
use App\Traits\DeleteTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryService extends BaseService
{
    use DeleteTrait;

    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category->with(['child'])->get();
    }

    public function store(Request $request)
    {
        $this->category->name        = $request->name;
        $this->category->description = $request->description;
        $this->category->parent_id   = $request->parent_id;
        $this->category->slug        = Str::slug($request->name);
        return $this->category->save();
    }

    public function getDetailCategory($id)
    {
        return $this->category->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $editCategory              = $this->getDetailCategory($id);
        $editCategory->name        = $request->name;
        $editCategory->description = $request->description;
        $editCategory->parent_id   = $request->parent_id;
        $editCategory->slug        = Str::slug($request->name);
        return $editCategory->save();
    }

    public function getParent()
    {
        return $this->category->newQuery()->with(['child'])->where('parent_id', 0)->get();
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->category);
    }
}
