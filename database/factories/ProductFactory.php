<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->generateRandomPrice(100000, 1000000, 10000);
        $discId = Discount::find()->all()->random()->id;
        $admId = Admin::where('username', 'admin')->first()->id;
        return [
            'name' => $this->faker->name(),
            'desc' => $this->faker->sentence(),
            'unit' => 'pcs',
            'category' => $this->faker->word(),
            'price' => $price,
            'stok' => 20,
            'discount_id' => $discId,
            'updated_by' => $admId,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function generateRandomPrice($min, $max, $modulus)
    {
        $result = rand($min, $max);
        if ($result % $modulus != 0) {
            $this->generateRandomPrice($min, $max, $modulus);
        }
        return $result;
    }
}
