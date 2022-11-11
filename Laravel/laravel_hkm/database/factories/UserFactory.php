<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Buihuycuong\Vnfaker\VNFaker;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mail_address' => vnfaker()->email(),
            'password' => Hash::make(123456),
            'name' => vnfaker()->fullname(),
            'address' => vnfaker()->city(),
            'phone' => vnfaker()->mobilephone(),
        ];
    }
}
