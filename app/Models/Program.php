<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['cllass'];

    public function cllass()
    {
        return $this->belongsTo(Cllass::class);
    }
}
