<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';
    protected $primaryKey = 'Id'; // Вказуємо, що первинний ключ — це "Id"
    public $timestamps = false; // Якщо в таблиці немає created_at і updated_at

    public function incidents()
    {
        return $this->hasMany(InsuranceIncident::class, 'StatusId', 'Id');
    }

    public function payouts()
    {
        return $this->hasMany(InsurancePayout::class, 'StatusId', 'Id');
    }
}