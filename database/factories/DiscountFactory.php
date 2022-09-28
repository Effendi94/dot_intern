<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $persen = $this->generateRandomNumber(5, 30, 5);
        $amount = $this->generateRandomNumber(10000, 100000, 10000);

        return [
            'name' => 'PROMO EXAMPLE',
            'desc' => 'Promo Example Description',
            'discount_persen' => $persen,
            'discount_max' => $amount,
            'status_code' => '08',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function generateRandomNumber($min, $max, $modulus)
    {
        $result = rand($min, $max);
        if ($result % $modulus != 0) {
            $this->generateRandomNumber($min, $max, $modulus);
        }
        return $result;
    }
}
