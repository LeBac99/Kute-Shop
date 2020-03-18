<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('categories')->insert([
        	['id'=>1, 'name'=>'Nam','slug'=>'nam', 'parent_id'=>0, 'description'=>'Tổng hợp thời trang nam'],
        	['id'=>2, 'name'=>'Áo Nam','slug'=>'ao-nam', 'parent_id'=>1, 'description'=>'Tổng hợp áo nam'],
        	['id'=>3, 'name'=>'Quần Nam','slug'=>'quan-nam', 'parent_id'=>1, 'description'=>'Tổng hợp quần nam'],
        	['id'=>4, 'name'=>'Nữ','slug'=>'nu', 'parent_id'=>0, 'description'=>'Tổng hợp thời trang nữ'],
        	['id'=>5, 'name'=>'Áo Nữ','slug'=>'ao-nu', 'parent_id'=>5, 'description'=>'Tổng hợp áo nữ'],
        	['id'=>6, 'name'=>'Quần Nữ','slug'=>'quan-nu', 'parent_id'=>5, 'description'=>'Tổng hợp quần nữ nam'],
        ]);


    }
}
