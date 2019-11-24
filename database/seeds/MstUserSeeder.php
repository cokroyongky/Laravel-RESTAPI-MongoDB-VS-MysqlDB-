<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 19:15:39
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:18:11
 */
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\MstUser;

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
        foreach (range(1, 400) as $index) {
            MstUser::create([
                'user_name' => $faker->name,
                'user_email' => $faker->email,
                'user_email_verified_at' => now(),
                'user_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'user_remember_token' => Str::random(10),
            ]);
        }
    }
}
