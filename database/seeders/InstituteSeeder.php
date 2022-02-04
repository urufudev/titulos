<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institute::create([
            'modular'=>'0757229',
            'name' => 'AUCARÁ',
            'local' => '084778',
            'address' =>'Avenida Tupac Amaru 700',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0671115',
            'name' => 'PERÚ COREA DEL SUR',
            'local' => '091397',
            'address' =>'Jiron Lambayeque 136',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0508473',
            'name' => 'VICTOR ALVAREZ HUAPAYA',
            'local' => '074519',
            'address' =>'Parque Principal Miraflores Mz U-1 Lote 1 Sector V',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0757211',
            'name' => 'CHIPAO',
            'local' => '085198',
            'address' =>'Avenida Cuba Mz 9 Lote 1',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1198217',
            'name' => 'MANUEL ANTONIO HIERRO POZO',
            'local' => '074543',
            'address' =>'Avenida Universitaria E Independencia S/N',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0671107',
            'name' => 'HUANTA',
            'local' => '079970',
            'address' =>'Jiron General Cordova 650',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1350982',
            'name' => 'SAN JUAN',
            'local' => '563976',
            'address' =>'Huaychahuaccana',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1187830',
            'name' => 'FEDERICO GONZALES CABEZUDO',
            'local' => '078961',
            'address' =>'Avenida Miguel Grau 120',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0757112',
            'name' => 'VIRGEN DEL ROSARIO',
            'local' => '085607',
            'address' =>'Avenida Moises Galimide Susen S/N',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1145713',
            'name' => 'JOSE MARIA ARGUEDAS',
            'local' => '084542',
            'address' =>'Carretera Nazca-Puquio',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1142108',
            'name' => 'HATUN SORAS',
            'local' => '091316',
            'address' =>'Avenida Grau S/N',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1145002',
            'name' => 'PAUCAR DEL SARASARA',
            'local' => '089667',
            'address' =>'Avenida Andres Avelino Caceres',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1530971',
            'name' => 'LOS MOROCHUCOS',
            'local' => '619756',
            'address' =>'Plaza Principal',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0697979',
            'name' => 'CESAR AUGUSTO GUARDIA MAYORGA',
            'local' => '088050',
            'address' =>'Avenida De La Cultura S/N',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);

        Institute::create([
            'modular'=>'1349943',
            'name' => 'SANTO DOMINGO DE GUZMAN',
            'local' => '759025',
            'address' =>'Yacuwusina S/N',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);

        Institute::create([
            'modular'=>'1732577',
            'name' => 'SAN MIGUEL',
            'local' => '810255',
            'address' =>'Avenida Mariscal Castilla S/N Mz C1 Lote 2',
            'type'=>'TECNOLOGICO',
            'status'=>'ACTIVO'
        ]);

        /* PEDAGOGICO */

        Institute::create([
            'modular'=>'0419937',
            'name' => 'NUESTRA SEÑORA DE LOURDES',
            'local' => '074473',
            'address' =>'Jiron 28 De Julio 393',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0721951',
            'name' => 'BENIGNO AYALA ESQUIVEL',
            'local' => '077914',
            'address' =>'Avenida Augusto B Leguia 293',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0637116',
            'name' => 'FILIBERTO GARCIA CUELLAR',
            'local' => '087908',
            'address' =>'Avenida La Cultura S/N S/N',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0591859',
            'name' => 'PUQUIO',
            'local' => '084523',
            'address' =>'Avenida Mariano Salas 347',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'0604371',
            'name' => 'JOSE SALVADOR CAVERO OVALLE',
            'local' => '079965',
            'address' =>'Jiron Razuhuillca 624',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1140144',
            'name' => 'CUNA DE LA LIBERTAD AMERICANA',
            'local' => '074883',
            'address' =>'Jiron Garcilazo De La Vega 257',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1198019',
            'name' => 'EL NAZARENO',
            'local' => '080087',
            'address' =>'Jiron Miller 370',
            'type'=>'PEDAGOGICO',
            'status'=>'ACTIVO'
        ]);
        Institute::create([
            'modular'=>'1140102',
            'name' => 'EL PACÍFICO',
            'local' => '074878',
            'address' =>'Jiron Callao 264',
            'type'=>'PEDAGOGICO',
            'status'=>'INACTIVO'
        ]);
        Institute::create([
            'modular'=>'1140060',
            'name' => 'JESUS NAZARENO',
            'local' => '000000',
            'address' =>'No Vigente',
            'type'=>'PEDAGOGICO',
            'status'=>'INACTIVO'
        ]);
        Institute::create([
            'modular'=>'1162924',
            'name' => 'SAN MIGUEL ARCANGEL',
            'local' => '082265',
            'address' =>'No Vigente',
            'type'=>'PEDAGOGICO',
            'status'=>'INACTIVO'
        ]);
    }
}
