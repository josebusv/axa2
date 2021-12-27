<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pago;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i < 100; $i++)
        {
            $cliente = new Cliente();
            $cliente->nombre_cliente = $faker->name;
            $cliente->num_documento  = $faker->unique()->numerify('#########');
            $cliente->tipo_documento = $faker->numberBetween(1,4);
            $cliente->save();

            for($j=0; $j < 20; $j++)
            {
                $vencimiento = $faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = 'America/Bogota');

                $pago = new Pago();
                $pago->cliente_id = $cliente->id;
                $pago->num_plan =  $faker->unique()->numerify('#######');
                $pago->vencimiento =  $vencimiento;
                $pago->valor    =  $faker->numerify('#######');
                $pago->vigencia =  rand(0,1);
                $pago->save();
            }

        }
    }
}
