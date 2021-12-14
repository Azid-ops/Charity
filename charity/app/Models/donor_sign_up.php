<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor_sign_up extends Model
{
    protected $fillable = ["fname", "lname", "email","password","re","role"];
}
