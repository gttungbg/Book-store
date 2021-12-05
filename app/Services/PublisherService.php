<?php

namespace App\Services;

use App\Models\Publisher;
use App\Traits\DeleteTrait;

class PublisherService extends BaseService
{
    use DeleteTrait;

    private $publisher;

    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher()
    {
        return $this->publisher->get();
    }

    public function store($request)
    {
        $this->publisher->name        = $request->name;
        $this->publisher->description = $request->description;
        return $this->publisher->save();
    }

    public function getDetailPublisher($id)
    {
        return $this->publisher->findOrFail($id);
    }

    public function update($request, $id)
    {
        $editPublisher              = $this->getDetailPublisher($id);
        $editPublisher->name        = $request->name;
        $editPublisher->description = $request->description;
        return $editPublisher->save();
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->publisher);
    }
}
