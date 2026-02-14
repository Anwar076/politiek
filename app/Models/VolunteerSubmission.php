<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'availability',
        'skills',
        'processed',
    ];

    protected function casts(): array
    {
        return [
            'processed' => 'boolean',
        ];
    }
}
