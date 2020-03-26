<?php

use Illuminate\Database\Seeder;

class first extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Debt::class, 50)->create()->each(function (\App\Debt $debt) {
            $victim = factory(\App\User::class)->create();
            $debtor = factory(\App\User::class)->create();
            $debt->users()->attach([$victim->id, $debtor->id]);
        });

    }
}
