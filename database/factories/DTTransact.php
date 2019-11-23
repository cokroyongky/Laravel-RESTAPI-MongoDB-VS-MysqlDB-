<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DTTransact;
use \App\MstUser;
use \App\DTSchedule;
use Faker\Generator as Faker;
use Faker\Provider\Base;

// $faker->addProvider(new Faker\Provider\id_ID\PhoneNumber($faker));

$factory->define(DTTransact::class, function (Faker $faker) {
    $faker->addProvider(new App\Faker\CustomProvider($faker));
    return [
        'user_id' => MstUser::all()->random()->id,
        'dt_schedule_id' =>DTSchedule::all()->random()->id,
        'phone_number' => $faker->tollFreePhoneNumber,
        'adult' => $faker->randomDigit,
        'child' => $faker->randomDigit,
        'payment_status' => $faker->randomElement($array = array('success','failed','pending')),
    ];
});
