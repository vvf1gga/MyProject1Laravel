<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePayout extends Model
{
    use HasFactory;

    protected $table = 'insurancepayouts';
    protected $primaryKey = 'Id';
    public $timestamps = true;

    protected $fillable = ['IncidentId', 'PayoutDate', 'PayoutAmount', 'StatusId'];

    public function incident()
    {
        return $this->belongsTo(InsuranceIncident::class, 'IncidentId');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusId');
    }
}