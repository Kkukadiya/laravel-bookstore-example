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
        $genreType = ['Science Fiction', 'Crime', 'Fantasy', 'Adventure', 'Romance', 'Mystery', 'Paranormal', 'Historical Fiction', 
                     'Children’s', 'Cookbook', 'Art', 'Self-help', 'Development', 'Motivational', 'Health', 'History'];

        return [
            'name' => $this->faker->word,
            'author' => $this->faker->name,
            'genre' => $genreType[rand(0, (count($genreType)-1))],
            'isbn' =>$this->faker->isbn13(),
            'description' => $this->faker->text(50),
            'publication_date' => $this->faker->dateTime(),
        ];
    }
}

