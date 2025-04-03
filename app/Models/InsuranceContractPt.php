<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InsuranceContractPt extends Model
{
    use HasFactory;

    protected $table = 'insurancecontractspt';
    protected $primaryKey = 'ContractId';
    public $timestamps = false;

    protected $fillable = ['ClientName', 'StartDate', 'EndDate', 'Premium'];

    public function getClientNameAttribute($value)
    {
        return DB::selectOne("SELECT AES_DECRYPT(ClientName, '123') as name FROM insurancecontractspt WHERE ContractId = ?", [$this->ContractId])->name ?? 'Невідомо';
    }
}