<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUserMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_metadata', function (Blueprint $table) {
            $table->id();
            $table->string('telefono',50);
            $table->string('direccion');
         
           
            $table->unsignedBigInteger('users_id');//Creamos el campo users_id va tener una llave forania 
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
                                                        //Referencia, es la referencia de la otra tabla  y on es el nombre de la otra tabla       

            $table->unsignedBigInteger('perfil_id');//Creamos el campo perfil id va tener una llave forania 
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('cascade');  
                                            //Referencia, es la referencia de la otra tabla  y on es el nombre de la otra tabla       

        });
    }

    /**
     * Reverse the migrations.WW
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_metadata');
    }
}
