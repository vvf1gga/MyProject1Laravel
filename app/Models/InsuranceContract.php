<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceContract extends Model
{
    protected $table = 'insurancecontracts';
    protected $primaryKey = 'Id'; 
    public $incrementing = true; 
    protected $keyType = 'int';
    public $timestamps = true; 
    
    protected $fillable = [
        'ServiceId', 'StartDate', 'EndDate', 'Premium', 'PaymentStatusId'
    ];
    
    public function service()
    {
        return $this->belongsTo(InsuranceService::class, 'ServiceId');
    }
    
    public function paymentStatus()
    {
        return $this->belongsTo(Status::class, 'PaymentStatusId');
    }

    public function contractDetails()
    {
        return $this->hasOne(InsuranceContractPt::class, 'ContractId');
    }
}