<?php

namespace Database\Factories;
use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CategoryID' => $this ->faker -> numberBetween(1,100),
            'CategoryName' => $this ->faker -> lastName(),
        ];
    }
}
