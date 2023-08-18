<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Acre",
            'sigla' => "AC"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Alagoas",
            'sigla' => "AL"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Amapá",
            'sigla' => "AP"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Amazonas",
            'sigla' => "AM"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Bahia",
            'sigla' => "BA"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Ceará",
            'sigla' => "CE"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Distrito Federal",
            'sigla' => "DF"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Espírito Santo",
            'sigla' => "ES"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Goiás",
            'sigla' => "GO"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Maranhão",
            'sigla' => "MA"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Mato Grosso",
            'sigla' => "MT"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Mato Grosso do Sul",
            'sigla' => "MS"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Minas Gerais",
            'sigla' => "MG"
        ]);
                DB::table('cidades')->insert([
                    'estado_id' => $idEstado,
                    'nome' => 'Brazópolis'
                   ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Pará",
            'sigla' => "PA"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Paraíba",
            'sigla' => "PB"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Paraná",
            'sigla' => "PR"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Pernambuco",
            'sigla' => "PE"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Piauí",
            'sigla' => "PI"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Rio de Janeiro",
            'sigla' => "RJ"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Rio Grande do Norte",
            'sigla' => "RN"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Rio Grande do Sul",
            'sigla' => "RS"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Rondônia",
            'sigla' => "RO"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Roraima",
            'sigla' => "RR"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Santa Catarina",
            'sigla' => "SC"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "São Paulo",
            'sigla' => "SP"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Sergipe",
            'sigla' => "SE"
        ]);
        $idEstado = DB::table('estados')->insertGetid([
            'nome' => "Tocantins",
            'sigla' => "TO"
        ]);
        
    }
}

