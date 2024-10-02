<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'specialization'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function medicalRecords() {
        return $this->hasMany(MedicalRecord::class);
    }
}