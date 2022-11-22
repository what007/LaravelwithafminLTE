<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name', 'email', 'leave_type', 'start_leave', 'end_leave', 'leave_reason'
    ];
}
