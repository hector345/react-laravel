<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "name" => $this->faker->name(),
            "content" => $this->faker->sentence(),
            "post_id" => function () {
                return Post::factory()->create();
            }
        ];
    }
}
