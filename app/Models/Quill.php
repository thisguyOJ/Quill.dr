<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quill extends Model
{
    use HasFactory;

    protected $fillable = [ // enable mass assignment for safe attributes by marking them as "fillable"
        'message',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    /*to protect the user from accidentally editing a column
    or if a user tries to send malicous Http request through
    a URL, through to the is_admin parameter, mass assignments
    vulerabilities are set to default to help protect the system
    */
    
}