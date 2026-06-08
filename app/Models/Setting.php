<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
    'site_name',
    'logo',
    'favicon',
    'whatsapp',
    'email',
    'instagram',
    'facebook',
    'tiktok',
    'address',
    'about',
    'maintenance_mode',
    
    ];
}
