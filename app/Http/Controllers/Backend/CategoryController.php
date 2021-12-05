<?php

namespace App\Http\Controllers\Backend;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct (CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getCategory();
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->categoryService->getCategory();
        return view('backend.category.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->categoryService->store($request);
        return redirect()->back()->with('success', __('Created category success'));
    }

    public function edit($id)
    {
        $editCategory = $this->categoryService->getDetailCategory($id);
        $categories = $this->categoryService->getParent();
        return view('backend.category.edit', compact('editCategory', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->categoryService->update($request, $id);
        return redirect()->back()->with('success', __('Updated category success'));
    }

    public function delete($id)
    {
        return $this->categoryService->delete($id);
    }

}
