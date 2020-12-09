<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert(
            'INSERT INTO 
            reviews (
                book_id,
                name,
                bady
                )
            VALUES(
                1,
                "visual C 2019超入門",
                "先生の期待の新作、君は真実を知る"
                )
            ');
    }
}
