<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'department'];

    public function user() {
        return $this->belongsTo(Patient::class);
    }
    
    public function checkups() {
        return $this->hasMany(Checkup::class);
    }
}
