<?php


namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    protected $table = 'tasks';

    protected $casts = [
        'children' => 'array',
    ];

    protected $fillable = [
        'id',
        'name',
        'alias',
        'children'
    ];


}