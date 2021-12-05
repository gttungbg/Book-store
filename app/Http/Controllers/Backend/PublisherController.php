<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Publisher\PublisherRequestAdd;
use App\Services\PublisherService;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    private $publisherService;

    public function __construct(PublisherService $publisherService)
    {
        $this->publisherService = $publisherService;
    }

    public function index()
    {
        $publishers = $this->publisherService->getPublisher();
        return view('backend.publisher.index', compact('publishers'));
    }

    public function create()
    {
        return view('backend.publisher.create');
    }

    public function store(PublisherRequestAdd $request)
    {
        $this->publisherService->store($request);
        return redirect()->back()->with('success', __('Created publisher'));
    }

    public function edit($id)
    {
        $editPublisher = $this->publisherService->getDetailPublisher($id);
        return view('backend.publisher.edit', compact('editPublisher'));
    }

    public function update(PublisherRequestAdd $request, $id)
    {
        $this->publisherService->update($request, $id);
        return redirect()->back()->with('success', __('Updated publisher'));
    }

    public function delete($id)
    {
        return $this->publisherService->delete($id);
    }

}
