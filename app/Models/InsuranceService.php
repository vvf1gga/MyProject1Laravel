<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceService extends Model
{
    use HasFactory;

    protected $table = 'insuranceservices';  

    protected $fillable = ['Name', 'Description', 'ParentServiceId']; 

    public function parentService(){
    return $this->belongsTo(InsuranceService::class, 'ParentServiceId');
    }

}

