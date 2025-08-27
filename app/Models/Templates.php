<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    use HasFactory;
    protected $table = 'templates';
    protected $fillable = [
        'template_id',
        'tmp_name',
        'tmp_url',
        'tmp_added_date',
        'tmp_updated_date'
    ];
    public $timestamps = false;
}
