<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DeveloperService;

class Developer extends Model
{
    use HasFactory;

    protected $table = 'developers';

    public function developer_services()
    {
        return $this->hasMany(DeveloperService::class, 'developer_id', 'id');
    }
}
