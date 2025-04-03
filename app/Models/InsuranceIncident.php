<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceIncident extends Model
{
    use HasFactory;

    protected $table = 'insuranceincidents';
    protected $primaryKey = 'Id';
    public $timestamps = true;

    protected $fillable = ['ContractId', 'IncidentDate', 'Description', 'StatusId'];

    public function contract()
    {
        return $this->belongsTo(InsuranceContract::class, 'ContractId');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusId');
    }
}