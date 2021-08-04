<?php
namespace App\Repository;

use App\Models\Service;
use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
   public function all(): Collection;
}