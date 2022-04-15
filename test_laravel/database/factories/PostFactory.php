<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
    * @return array
     */
    public function definition()
    {
        return [
            // add fake post by this cmd
            // App\Models\Post::factory()->times(200)->create('user_id'=>21);
            'body' => $this->faker->sentence(20),
        ];
    }
}
