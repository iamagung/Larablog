<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['sute_name', 'contact_number', 'contact_email', 'address'];
}
