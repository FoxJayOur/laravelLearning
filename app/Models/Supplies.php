<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplies extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'qty',
        'description',
        'usage_rates',
        'cost',
        'storage_requirements',
    ];
}
