<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'agree_privacy',
        'agree_marketing',
        'ip_address',
        'user_agent',
        'source_page',
    ];

    protected $casts = [
        'agree_privacy' => 'boolean',
        'agree_marketing' => 'boolean',
    ];
}
