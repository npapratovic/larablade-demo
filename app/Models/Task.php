<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'status', // e.g., pending, completed, in-progress
        'priority', // e.g., low, medium, high
        'assigned_to', // user ID or name
        'created_by', // user ID or name
    ];
}