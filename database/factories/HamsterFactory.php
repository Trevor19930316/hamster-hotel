<?php

namespace Database\Factories;

use App\Models\Hamster;
use Illuminate\Database\Eloquent\Factories\Factory;

class HamsterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hamster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = rand(0, 1);
        $age_month = rand(1, 15);

        return [
            'name' => $this->faker->name,
            'category' => 'hamster',
            'sex' => $sex,
            'age_month' => $age_month,
            'description' => $this->faker->paragraph(2),
        ];
    }
}
