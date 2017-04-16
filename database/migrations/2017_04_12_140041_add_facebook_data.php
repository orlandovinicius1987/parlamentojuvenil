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

        Seeduc::create([
            'escola' => 'ACR',
            'municipio' => 'ACR',
            'regional' => 'ACR',
            'nome' => 'Antonio Carlos Ribeiro',
            'matricula' => '002ANTONIOCARLOS',
            'nascimento' => '1970-10-31',
        ]);

        Seeduc::create([
            'escola' => 'BRENOT',
            'municipio' => 'BRENOT',
            'regional' => 'BRENOT',
            'nome' => 'Breno Trengrouse',
            'matricula' => '003BRENOT',
            'nascimento' => '1980-01-01',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Seeduc::where('matricula', '001FACEBOOK')->delete();
        Seeduc::where('matricula', '003BRENOT')->delete();
        Seeduc::where('matricula', '002ANTONIOCARLOS')->delete();
    }
}
