<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceContractRenewal extends Model
{
    use HasFactory;

    protected $table = 'insurancecontractsrenewals';
    protected $primaryKey = 'Id';
    public $timestamps = false; // якщо не використовуємо created_at, updated_at

    protected $fillable = ['PreviousContractId', 'NewContractId', 'RenewalDate'];

    public function previousContract()
    {
        return $this->belongsTo(InsuranceContract::class, 'PreviousContractId');
    }

    public function newContract()
    {
        return $this->belongsTo(InsuranceContract::class, 'NewContractId');
    }
}