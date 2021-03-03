<?php

namespace App\Presenters;

use Illuminate\Database\Eloquent\Model;

class UserPresenter
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function avatar()
    {
        return $this->model->avatar;
    }

    public function name()
    {
        if ($this->model->id === auth()->id()) {
            return 'You';
        }

        return $this->model->name;
    }
}
