<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'name', 'gender', 'dateofbirth', 'placeofbirth', 'address', 'religion', 'telephone', 'school', 'program', 'parentsname', 'phone', 'note'
    ];
}
