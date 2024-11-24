<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Model;

Class Case_ extends Model
{
protected $table = 'cases';

protected $fillable = ['contract_id', 'incident_description', 'claim_amount'];

public function contract()
    {
        return $this->belongsTo(Contract::class); 
    }

    public $timestamps = false;
}