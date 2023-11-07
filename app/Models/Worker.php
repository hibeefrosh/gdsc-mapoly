<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['worker_name', 'location_id', 'work_date'];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    
}
