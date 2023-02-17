<?php

namespace App\Models;

use App\Models\Interfaces\StatusInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model implements StatusInterface
{
    use HasFactory;

    protected $fillable = [
        'status',
        'name',
    ];
}
