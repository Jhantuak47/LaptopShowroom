<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'generic_name' => $faker->word,
        'dosage'=>$faker->paragraph,
        'cat_id'=>$faker->randomDigitNotNull,
        'b_id' => $faker->randomDigitNotNull,
        'manufacturer'=>$faker->word,
        'price'=>$faker->randomFloat,
        'price'=>$faker->randomFloat,

    ];
});
