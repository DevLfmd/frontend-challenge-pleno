<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Developer;

class DeveloperService extends Model
{
    use HasFactory;
    
    protected $table = 'developer_services';

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'foreign_key', 'developer_id');
    }
}
