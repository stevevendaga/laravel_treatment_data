<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatment_datas', function (Blueprint $table) {
            $table->bigIncrements('Id')->start_from(140000)->primary();
            $table->string('Data1',500)->nullable();
            $table->text('Data2')->nullable();
            $table->text('Data3')->nullable();
            $table->text('Data4')->nullable();
            $table->text('Data5')->nullable();
            $table->text('Winning_company')->nullable();
            $table->date('Data7')->nullable();
            $table->date('Date')->nullable();
            $table->decimal('Amount',10,2)->default(0.00);;
            $table->text('CPV')->nullable();
            $table->integer('Data11')->nullable();
            $table->text('Data12')->nullable();
            $table->text('Data13')->nullable();
            $table->integer('read_status')->default(0);;
            $table->date('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            //Add unique index
            $table->index(['Data1',
                 'Data2',
                 'Data3',
                 'Data4',
                 'Data5',
                 'Winning_company',
                 'Data7',
                 'Date',
                 'Amount',
                 'CPV',
                 'Data11',
                 'Data12',
                 'Data13',
                ]);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment_datas');
    }
};
