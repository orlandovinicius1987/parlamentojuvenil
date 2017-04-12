<?php

use App\Data\Entities\Seeduc;
use Illuminate\Database\Migrations\Migration;

class AddFacebookData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Seeduc::create([
            'escola' => 'FACEBOOK',
            'municipio' => 'FACEBOOK',
            'regional' => 'FACEBOOK',
            'nome' => 'Facebook Developer',
            'matricula' => '001FACEBOOK',
            'nascimento' => '2017-04-12',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Seeduc::where('escola', 'FACEBOOK')->delete();
    }
}
