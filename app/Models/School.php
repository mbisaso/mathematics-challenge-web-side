<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $table = 'schools';
    public $primaryKey = 'id';
    public $fillable = ['name', 'schoolRegistrationNumber', 'district'];

    use HasFactory;
}
