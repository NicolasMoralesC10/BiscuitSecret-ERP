<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            [
                'nombre'      => 'Galleta de Chocolate',
                'descripcion' => 'Galleta artesanal rellena de chocolate por dentro con chips de chocolate en la capa superior.',
                'precio'      => 4000,
                'cantidad'    => 50,
                'imagen'      => 'Galleta_Chocolate.png',
                'estado'      => 1,
            ],
            [
                'nombre'      => 'Galleta de Oreo',
                'descripcion' => 'Galleta artesanal rellena de cookies and cream con trozos de galleta oreo en su capa superior.',
                'precio'      => 4000,
                'cantidad'    => 50,
                'imagen'      => 'Galleta_Oreo_chips.png',
                'estado'      => 1,
            ],
            [
                'nombre'      => 'Galleta de Snickers y Masmelos',
                'descripcion' => 'Galleta artesanal rellena de snickers con trozos de masmelos en su capa interior.',
                'precio'      => 5000,
                'cantidad'    => 50,
                'imagen'      => 'Galleta_Masmelos.png',
                'estado'      => 1,
            ],
            [
                'nombre'      => 'Galleta de Avena con Fresas',
                'descripcion' => 'Galleta artesanal rellena de avena con fresas en su capa superior.',
                'precio'      => 4500,
                'cantidad'    => 50,
                'imagen'      => 'Avena&Fresas.png',
                'estado'      => 1,
            ],
            [
                'nombre'      => 'Galleta Red Velvet',
                'descripcion' => 'Galleta artesanal de red velvet con cobertura de queso crema.',
                'precio'      => 5000,
                'cantidad'    => 50,
                'imagen'      => 'Galleta_Redvelvet.png',
                'estado'      => 1,
            ],
        ];

        foreach ($productos as $producto) {
            DB::table('productos')->updateOrInsert(
                ['nombre' => $producto['nombre']],
                array_merge($producto, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
