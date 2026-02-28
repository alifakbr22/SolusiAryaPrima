<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_title',
        'company_name',
        'logo',
        'company_description',
        'address',
        'phone',
        'email',
        'hotline',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'whatsapp_url',
        'npwp',
        'nib',
        'hero_badge',
        'hero_title',
        'hero_description',
        'vision',
        'mission',
    ];
}
