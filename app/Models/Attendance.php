<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id', 'date', 'status', 'check_in_time', 'check_out_time'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

