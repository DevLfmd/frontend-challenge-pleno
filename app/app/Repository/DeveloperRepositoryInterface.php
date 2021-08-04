<?php
namespace App\Repository;

use App\Models\Developer;
use Illuminate\Support\Collection;

interface DeveloperRepositoryInterface
{
   public function all(): Collection;
   public function allWith($relationships = []): Collection;
}