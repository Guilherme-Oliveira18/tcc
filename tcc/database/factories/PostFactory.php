<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\TestCase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            //'user_id'=>User::factory(),
           // 'titulo' => $this->faker->sentence(),
            //'slug' => $this->faker->slug(3),
            //'image' => $this->faker->imageUrl(),
            //'body' => $this->faker->paragraph(12),
            //'publidado_em'=>$this->faker->dateTimeBetween('-1 Week','+1 week'),
            //'featured'=> $this->faker->boolean(10),

        ];
    }
}
