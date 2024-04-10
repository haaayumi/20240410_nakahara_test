<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last-name' => $this->faker->lastName(),
            'first-name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->email(),
            'tel'=> $this->faker->phoneNumber(),
            'address' => $this->faker->city().' ' .$this->faker->streetAddress(),
            'building' => $this->faker->randomElement([' ', $this->faker->secondaryAddress()]),
            'detail' => $this->faker->randomElement(['商品のお届けについて', '商品の交換について', '商品トラブル', 'ショップへのお問い合わせ', 'その他']),
        ];
    }
}
