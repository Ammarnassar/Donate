<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Request;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'details' => $this->faker->paragraph,
            'status' => $this->faker->state,
            'raised' => $this->faker->randomNumber(3 ),
            'goal' => $this->faker->randomNumber(4),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
