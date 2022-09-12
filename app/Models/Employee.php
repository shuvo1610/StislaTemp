<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['name','phone','email','address','salary'];

}
