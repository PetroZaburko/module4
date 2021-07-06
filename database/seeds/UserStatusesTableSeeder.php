<?php

use App\UserStatuses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_statuses')->truncate();
        UserStatuses::create([
            'status' => 'Online',
            'interpretation' => 'success'
        ]);
        UserStatuses::create([
            'status' => 'Not here',
            'interpretation' => 'warning'
        ]);
        UserStatuses::create([
            'status' => 'Do not distrub',
            'interpretation' => 'danger'
        ]);
    }
}
