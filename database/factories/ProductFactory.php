<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,5),
            'name' => [
                "uz" => fake()->sentence(3),
                "ru" => "Проверить текст на уникальность"
            ],
            'price' => rand(50000, 10000000),
            'description'=> [
                'uz' => fake()->paragraph(5),
                'ru' => 'Осталась в прошлом техника некачественного рерайта с изменением каждого пятого или четвертого слова. В текстах, написанных подобным образом, будет обнаружен высокий процент совпадений с исходником. Также мы рады сообщить, что наш алгоритм обнаруживает плагиат и после перестановки слов, фраз и предложений местами.'
            ],
        ];
    }
}
