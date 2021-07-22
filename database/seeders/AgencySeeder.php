<?php

namespace Database\Seeders;

use App\Models\agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agency = new agency();
        $agency->store = 'Hoang Nguyen';
        $agency->phone = '096385742';
        $agency->email = 'hoang@gmail.com';
        $agency->address = 'Ha Noi, viet Nam';
        $agency->name = 'Le Van Nguyen';
        $agency->store = 'Hoang Nguyen';
        $agency->status = 'Hoat dong';
        $agency->save();
    }
}
