<?php

use App\Notification;
use Illuminate\Database\Seeder;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Notification::class, 10)->create([
            'link' => null,
            'image' => null,
            'requirement' => null,
        ]);

        factory(Notification::class, 10)->create([
            'link' => null,
            'image' => null,
            'text' => null,
        ]);

        factory(Notification::class, 10)->create([
            'text' => null,
            'requirement' => null,
            'expires' => null,
        ]);

        factory(Notification::class, 10)->create([
            'requirement' => null,
            'link' => null,
            'image' => null,
        ]);
    }
}