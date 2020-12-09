<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO books (isbn, title, price, publisher, published) VALUES("978-4-8222-5399-8","visual C 2019超入門", 2000, "日経BP", "2019-08-22")');
    }
}
