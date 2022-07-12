<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instansiando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Uilson Souza';
        $fornecedor->site = 'uilsonps4.com';
        $fornecedor->uf = 'PE';
        $fornecedor->email = 'uilson@gmail.com';
        $fornecedor->save();

        //método create
        Fornecedor::create([
            'nome' => 'Uilson',
            'site' => 'uilson.com.br',
            'uf' => 'PB',
            'email' => 'uilson@hotmail.com'
        ]);

    }
}
