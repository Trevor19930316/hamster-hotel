<?php

namespace Database\Factories;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Owner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = rand(0, 1);
        $sexArr = [0 => 'female', '1' => 'male'];

        return [
            'name' => $this->faker->name($sexArr[$sex]),
            'sex' => $sex,
            'mobile' => $this->faker->phoneNumber,
        ];
    }
}
