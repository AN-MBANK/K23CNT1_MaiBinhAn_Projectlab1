<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aCustomer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'phone', 'address', 'picture', 'status'];
}