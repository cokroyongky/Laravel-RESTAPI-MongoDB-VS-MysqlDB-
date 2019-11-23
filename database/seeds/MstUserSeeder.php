<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\MstUser;

class MstUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        foreach (range(1, 50) as $index) {

            MstUser::create([
                'user_name' => $faker->name,
                'user_email' => $faker->unique()->safeEmail,
                'user_email_verified_at' => now(),
                'user_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'user_remember_token' => Str::random(10),
            ]);
        }
        // factory('App\MstUser', 10)->create();
        // $faker = Faker::create('id_ID');

        // for ($i = 1; $i <= 100; $i++) {
        //     // insert data ke table pegawai menggunakan Faker
        //     DB::table('mst_users')->insert([
        //         'user_name' => $faker->name,
        //         'user_email' => $faker->unique()->safeEmail,
        //         'user_email_verified_at' => now(),
        //         'user_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        //         'user_remember_token' => Str::random(10),
        //     ]);
        // }
    }
}

// $factory->define(DTTransact::class, function (Faker $faker) {
//     return [
//         'user_id' => factory(MstUser::class)->create()->id,
//         'dt_schedule_id' => factory(DTSchedule::class)->create()->id,
//         'phone_number' => $faker->phoneNumber,
//         'adult' => $faker->unique()->randomDigit, // password
//         'child' => $faker->unique()->randomDigit,
//         'payment_status' => randomElement(['success', 'failed', 'pending']),
//     ];
// });
