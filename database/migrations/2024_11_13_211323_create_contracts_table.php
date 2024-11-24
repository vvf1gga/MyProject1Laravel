<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');  // Назва клієнта
            $table->foreignId('service_id')->constrained()->onDelete('cascade');  // Зовнішній ключ на таблицю insurance_services
            $table->date('start_date');  // Дата початку
            $table->date('end_date');  // Дата закінчення
            $table->decimal('premium_amount', 8, 2);  // Сума премії
            $table->timestamps();  // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
