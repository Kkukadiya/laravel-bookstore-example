<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['fiction', 'nonfiction'];
        return [
            'name' => $this->faker->word,
            'author' => $this->faker->name,
            'genre' => $type[rand(0, (count($type)-1))],
            'isbn' =>$this->faker->word,
            'description' => $this->faker->text(50)
        ];
    }
}

