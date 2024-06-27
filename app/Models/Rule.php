<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = ['conditions', 'disease_id'];

    protected $casts = [
        'conditions' => 'array',
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}