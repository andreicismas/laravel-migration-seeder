<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFildsToPachettiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pachetti', function (Blueprint $table) {
            $table->mediumInteger('id_viaggio');
            $table->string('tipo_pachetto', 100);
            $table->date('ritorno');
            $table->date('partenza');
            $table->string('periodo_anno', 20)->comment('inverno/estate/autuno');
            $table->longText('descrizione')->nullable();
            $table->boolean('disponibilita')->default(true);
            $table->smallInteger('posti_totali');
            $table->float('prezzo', 8,5)->nullable();		
            $table->float('sconto_fidelity', 6,3)->default(0)->nullable();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pachetti', function (Blueprint $table) {
            $table->mediumInteger('id_viaggio');
            $table->string('tipo_pachetto');
            $table->date('partenza');
            $table->date('ritorno');
            $table->string('periodo_anno')->comment('inverno/estate/autuno');
            $table->string('meta');
            $table->longText('descrizione');
            $table->boolean('disponibilita');
            $table->smallInteger('posti_totali');
            $table->float('prezzo');		
            $table->float('sconto_fidely');
        });
    }
}
