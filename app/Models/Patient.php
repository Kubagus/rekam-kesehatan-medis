<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone_number'];

    public function mediccalRecords() {
        return $this->hasMany(MedicalRecord::class);
    }
    public function ckeckups() {
        return $this->hasMany(Checkup::class);
    }
}
