<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $models = [
            'Ford',
            'Chevrolet',
            'Dodge',
            'Toyota',
            'Honda',
            'Nissan',
            'Hyundai',
            'Kia',
            'Volkswagen',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Lexus',
            'Mazda',
            'Subaru',
            'Tesla',
            'Volvo',
            'Acura',
            'Cadillac',
            'Chrysler',
            'GMC',
            'Infiniti',
            'Jeep',
            'Lincoln',
            'Porsche',
            'Buick',
            'Land Rover',
            'Mitsubishi',
            'Mini',
            'Fiat',
            'Jaguar',
            'Ram',
            'Bentley',
            'Maserati',
            'Scion',
            'Smart',
            'Ferrari',
            'Lamborghini',
            'Suzuki',
            'Aston Martin',
            'Lotus',
            'Rolls-Royce',
            'Maybach',
            'Alfa Romeo',
            'Genesis',
            'Bugatti',
            'McLaren',
            'Koenigsegg',
            'Spyker',
            'Hummer',
            'Daewoo',
            'Plymouth',
            'Eagle',
            'Saturn',
            'Pontiac',
            'Oldsmobile',
            'Mercury',
            'Saab',
            'Polestar',
            'AM General',
            'Geo',
            'DeLorean',
            'MG',
            'Aptera',
            'Aurus',
            'BAC',
            'Bollinger',
            'Bricklin',
            'BYD',
            'Canoo',
            'Chery',
            'Coda',
            'Czinger',
            'Daihatsu',
            'Datsun',
            'Detroit Electric',
            'Duesenberg',
            'Elio',
            'Faraday Future',
            'Fisker',
            'Gumpert',
            'Hennessey',
            'Hillman',
            'Holden',
            'Hummer',
            'Isuzu',
            'Karma',
            'KTM',
            'Lada',
            'Lancia',
            'Laraki',
            'Mahindra',
            'Marcos',
            'Maruti',
        ];
        return [
            'year' => fake()->year(),
            'model' => $models[array_rand($models)],

        ];
    }
}
