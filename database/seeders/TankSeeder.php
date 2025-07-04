<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tank;

class TankSeeder extends Seeder
{
    public function run(): void
    {
        Tank::create([
            'name' => 'Tiger I',
            'slug' => 'tiger-i',
            'description' => 'A legendary German heavy tank with thick armor and a powerful 88mm gun.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Bundesarchiv_Bild_101I-299-1805-16%2C_Nordfrankreich%2C_Panzer_VI_%28Tiger_I%29.2.jpg/330px-Bundesarchiv_Bild_101I-299-1805-16%2C_Nordfrankreich%2C_Panzer_VI_%28Tiger_I%29.2.jpg',
            'is_featured' => true,
            'category' => 'heavy-tanks',
        ]);

        Tank::create([
            'name' => 'T-34/85',
            'slug' => 't-34-85',
            'description' => 'Soviet medium tank, highly mobile and cost-effective.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Tank_T-34.JPG/1200px-Tank_T-34.JPG',
            'is_featured' => false,
            'category' => 'medium-tanks',
        ]);

        Tank::create([
            'name' => 'Sherman M4',
            'slug' => 'sherman-m4',
            'description' => 'American medium tank, reliable and mass-produced.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/M4_Sherman_tank_-_Flickr_-_Joost_J._Bakker_IJmuiden.jpg/1200px-M4_Sherman_tank_-_Flickr_-_Joost_J._Bakker_IJmuiden.jpg',
            'is_featured' => true,
            'category' => 'medium-tanks',
        ]);

        Tank::create([
            'name' => 'Panzer IV',
            'slug' => 'panzer-iv',
            'description' => 'German medium tank, backbone of the Wehrmacht.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Panzermuseum_Munster_2010_0128_b.jpg/1200px-Panzermuseum_Munster_2010_0128_b.jpg',
            'is_featured' => false,
            'category' => 'medium-tanks',
        ]);

        Tank::create([
            'name' => 'IS-3',
            'slug' => 'is-3',
            'description' => 'Soviet heavy tank with sloped armor design.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/IS3.jpg/640px-IS3.jpg',
            'is_featured' => true,
            'category' => 'heavy-tanks',
        ]);

        Tank::create([
            'name' => 'Cromwell',
            'slug' => 'cromwell',
            'description' => 'British cruiser tank, fast and maneuverable.',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Cromwell-latrun-2.jpg/960px-Cromwell-latrun-2.jpg',
            'is_featured' => false,
            'category' => 'light-tanks',
        ]);
    }
}
