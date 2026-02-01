<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::pluck("id")->toArray();
        //Data time
        $currentDate = Carbon::now()->format('Y-m-d H:i:s');
        //ប្រើសម្រាប់កំណត់ពេលវេលា


        // 1 2 = [1,2,3]
        $userID = collect($user)->random();
        //$user have [1,2,3]  => random 1 2 3
        return [
            //
            "content" => $this->faker->text(50),
            "user_id" => $this->faker->numberBetween(1, 3),
            "user_id" => $userID,
            "created_at" => $currentDate,
            "updated_at" => $currentDate

        ];
    }
}
