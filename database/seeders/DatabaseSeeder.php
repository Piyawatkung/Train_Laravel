<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table( 'table_blog' )->insert(
            [
                [
                    'title'      => 'Blog 2',
                    'content'    => 'Content Blog 2',
                    'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                    'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                ],
                [
                    'title'      => 'Blog 2',
                    'content'    => 'Content Blog 2',
                    'created_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                    'updated_at' => Carbon::now()->format( 'Y-m-d H:i:s' ),
                ],
            ],
        );

    }
}
