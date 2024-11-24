<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Налаштування для роботи з конкретною таблицею, якщо її ім'я не співпадає з назвою моделі
    protected $table = 'services'; // ім'я таблиці в БД

    // Додаткові налаштування для моделі
    protected $fillable = 
    [
        'name',        
        'conditions',  
    ];
    
    public $timestamps = false;
    
}
