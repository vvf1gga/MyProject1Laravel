<?php

namespace App\Models;

Use Illuminate\Database\Eloquent\Model;

Class Payment extends Model
{
protected $table = 'payments';

protected $fillable = ['contract_id', 'amount', 'payment_date'];

public function Cases()
{
    return $this->hasMany(Case_::class);
}

public $timestamps = false;

}