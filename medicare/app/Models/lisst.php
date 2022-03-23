<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lisst extends Model
{
    protected $table ="lists";
    protected $fillable = ["tasks"];
}
