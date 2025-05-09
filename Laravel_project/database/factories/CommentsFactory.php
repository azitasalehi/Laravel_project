<?php

namespace Database\Factories;

use GlassCode\PersianFaker\PersianFaker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(
            new FakerPicsumImagesProvider($this->faker));

        $fake_s= PersianFaker::create();
        return [
            'user_id' =>null,
            'product_id' =>$this->faker->numberBetween(1, 11),
            'name'=>$fake_s->person()->name()." ".$fake_s->person()->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'avatar' =>$this->faker->imageUrl($width = 100, $height = 100),
            'text'=>$fake_s->text()->sentence(),
            'approve'=> $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
