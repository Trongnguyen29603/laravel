<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // tạo ra 1 cái khuôn dể dữ liệu của mình đẩy lên  theo đúng cái khuôn mà mình tạo
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'date_of_birth'=> fake()-> date(),
            'status'=>1
        ];
    }
    
}
