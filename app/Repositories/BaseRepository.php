<?php

namespace App\Repositories;

class BaseRepository
{
    /**
     * @var $model
     */
    protected $model;

    /**
     * Get all models.
     *
     * @return $model
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * Find a model
     *
     * @param int|array $id
     * @return mixed
     */
    public function getById($id): mixed
    {
        if (is_array($id)) {
            return $this->model
                ->whereIn('id', $id)
                ->get();
        } else {
            return $this->model->find($id);
        }
    }

    /**
     * Create a new model
     */
    public function store(array $data)
    {
        $instance = new $this->model;
        foreach ($data as $key => $value) {
            $instance->{$key} = $value;
        }
        $instance->save();

        return $instance->fresh();
    }
}
