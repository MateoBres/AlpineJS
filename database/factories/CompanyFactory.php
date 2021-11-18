<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'vat' => $this->faker->numberBetween($min = 900000000000, $max = 9999999999999),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'socials' => $this->faker->url()
        ];
    }
}
