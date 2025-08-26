<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_contact_no',
        'admin_status',
        'admin_added_timestamp',
        'changed_added_timestamp',
    ];
}
