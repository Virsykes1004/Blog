<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Iluminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Curso::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(), 
            'categoria'   =>$this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
}
