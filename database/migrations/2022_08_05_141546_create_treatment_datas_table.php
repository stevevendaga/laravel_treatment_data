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
            $table->bigIncrements('id')->start_from(140000)->primary();
            $table->string('data1',500)->nullable();
            $table->text('data2')->nullable();
            $table->text('data3')->nullable();
            $table->text('data4')->nullable();
            $table->text('data5')->nullable();
            $table->text('winning_company')->nullable();
            $table->date('data7')->nullable();
            $table->date('date')->nullable();
            $table->decimal('amount',10,2)->default(0.00);;
            $table->text('cpv')->nullable();
            $table->integer('data11')->nullable();
            $table->text('data12')->nullable();
            $table->text('data13')->nullable();
            $table->integer('read_status')->default(0);;
            $table->date('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            //Add unique index
            $table->index(['data1',
                 'data2',
                 'data3',
                 'data4',
                 'data5',
                 'winning_company',
                 'data7',
                 'date',
                 'amount',
                 'cpv',
                 'data11',
                 'data12',
                 'data13',
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
