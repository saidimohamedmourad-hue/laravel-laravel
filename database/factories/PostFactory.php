<?php

namespace Database\Factories;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> Str::uuid()->tostring(),
            'title'=> $this->faker->sentence,
            'body'=> $this->faker->paragraphs(3,true),
            'author'=>$this->faker->name,
            'published'=> $this->faker->boolean

        ];
    }
}
