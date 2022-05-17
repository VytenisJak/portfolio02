<?php

namespace Database\Factories;
use App\Models\goods;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\goods>
 */
class GoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this ->faker -> word(2),
            'description' => $this ->faker -> sentence(3),
            'image_url' => $this ->faker -> url(),
            'image_name' => $this ->faker -> word(1),
            'price' => $this ->faker -> randomDigitNot(2),
            'category_id' => $this ->faker -> numberBetween(1, 4),
        ];
    }
}

