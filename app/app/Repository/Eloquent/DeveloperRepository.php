<?php

namespace App\Repository\Eloquent;

use App\Models\Developer;
use App\Repository\DeveloperRepositoryInterface;
use Illuminate\Support\Collection;

class DeveloperRepository extends BaseRepository implements DeveloperRepositoryInterface
{

   /**
    * DeveloperRepository constructor.
    *
    * @param Developer $model
    */
    public function __construct(Developer $model)
    {
        parent::__construct($model);
    }

   /**
    * @return Collection
    */
    public function all(): Collection
    {
        return $this->model->all();    
    }

    /**
     * @return Collection
     */
    public function allWith($relationships = []): Collection
    {
        return $this->model->with($relationships)->get();
    }
}