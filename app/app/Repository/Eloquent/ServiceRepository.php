<?php

namespace App\Repository\Eloquent;

use App\Models\Service;
use App\Repository\ServiceRepositoryInterface;
use Illuminate\Support\Collection;

class ServiceRepository extends BaseRepository implements ServiceRepositoryInterface
{

   /**
    * ServiceRepository constructor.
    *
    * @param Service $model
    */
    public function __construct(Service $model)
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
}