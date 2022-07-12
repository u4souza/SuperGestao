<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
     /*   $fornecedor = new SiteContato();
        $fornecedor->nome = 'Uilson Souza';
        $fornecedor->telefone = '(81)9-995134234';
        $fornecedor->email = 'u4code@gmail.com';
        $fornecedor->motivo_contato = 1;
        $fornecedor->mensagem = 'Eu quero ser desenvolvedor PHP-Laravel';
        $fornecedor->save();
        */

        factory(SiteContato::class, 100)->create();
    }

}
