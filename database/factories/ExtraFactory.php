<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
=======
namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Models\Extra;
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)

class ExtraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     */
    protected $model = \Modules\Xot\Models\Extra::class;
=======
     *
     * @var class-string<Model>
     */
    protected $model = Extra::class;
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
        return [];
=======
        return [
            // 'user_id' => $this->faker->randomNumber(5),
            'name' => $this->faker->name,
            'personal_team' => $this->faker->boolean,
        ];
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
    }
}
