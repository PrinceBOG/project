<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\Timezone\Model\Timezone;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
{
    protected $model = Timezone::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'zone' => $this->faker->word,
            'geojson' => json_encode([
                'type' => 'MultiPolygon',
                'coordinates' => [[[
                    [$this->faker->longitude, $this->faker->latitude],
                    [$this->faker->longitude, $this->faker->latitude],
                    [$this->faker->longitude, $this->faker->latitude],
                    [$this->faker->longitude, $this->faker->latitude]
                ]]]
            ]),
            'default' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
