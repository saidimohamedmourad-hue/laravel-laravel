<?php

namespace Database\Factories;

use App\Models\Comment;

use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;
use str;
use function Pest\Laravel\post;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id'=> post::factory(),
            'content'=>$this->faker->sentence,
            'author' =>$this->faker->name,
            

        ];
    }
}
