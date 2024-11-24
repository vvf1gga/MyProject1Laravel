<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Model;

Class Contract extends Model
{
protected $table = 'contracts';

protected $fillable = ['client_name', 'insurance_service_id', 'start_date', 'end_date', 'premium_amount'];

public function Service()
    {
        return $this->belongsTo(Service::class);  // Зв'язок з страховою послугою (один договір до однієї послуги)
    }

    public $timestamps = false;
}