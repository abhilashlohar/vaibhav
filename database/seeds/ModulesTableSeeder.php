<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder {

    public function run()
    {
        $users = [
            ['id' => 1, 'name' => 'CategoryController@index'],
            ['id' => 2, 'name' => 'CategoryController@create'],
            ['id' => 3, 'name' => 'CategoryController@store'],
            ['id' => 4, 'name' => 'CategoryController@edit'],
            ['id' => 5, 'name' => 'CategoryController@update'],
            ['id' => 6, 'name' => 'CategoryController@destroy'],
            ['id' => 7, 'name' => 'SubCategoryController@index'],
            ['id' => 8, 'name' => 'SubCategoryController@create'],
            ['id' => 9, 'name' => 'SubCategoryController@store'],
            ['id' => 10, 'name' => 'SubCategoryController@edit'],
            ['id' => 11, 'name' => 'SubCategoryController@update'],
            ['id' => 12, 'name' => 'SubCategoryController@destroy'],
            ['id' => 13, 'name' => 'ProductController@index'],
            ['id' => 14, 'name' => 'ProductController@create'],
            ['id' => 15, 'name' => 'ProductController@store'],
            ['id' => 16, 'name' => 'ProductController@edit'],
            ['id' => 17, 'name' => 'ProductController@update'],
            ['id' => 18, 'name' => 'ProductController@show'],
            ['id' => 19, 'name' => 'ProductController@destroy'],
            ['id' => 20, 'name' => 'AdminController@index'],
            ['id' => 21, 'name' => 'AdminController@create'],
            ['id' => 22, 'name' => 'AdminController@store'],
            ['id' => 23, 'name' => 'AdminController@edit'],
            ['id' => 24, 'name' => 'AdminController@update'],
            ['id' => 25, 'name' => 'BlogCategoryController@index'],
            ['id' => 26, 'name' => 'BlogCategoryController@create'],
            ['id' => 27, 'name' => 'BlogCategoryController@store'],
            ['id' => 28, 'name' => 'BlogCategoryController@edit'],
            ['id' => 29, 'name' => 'BlogCategoryController@update'],
            ['id' => 30, 'name' => 'BlogController@index'],
            ['id' => 31, 'name' => 'BlogController@create'],
            ['id' => 32, 'name' => 'BlogController@store'],
            ['id' => 33, 'name' => 'BlogController@edit'],
            ['id' => 34, 'name' => 'BlogController@update'],
            ['id' => 35, 'name' => 'EnquiryController@index'],
            ['id' => 36, 'name' => 'EnquiryController@show'],
            ['id' => 37, 'name' => 'EnquiryController@reply'],
            ['id' => 38, 'name' => 'UserRightController@edit'],
            ['id' => 39, 'name' => 'UserRightController@update'],
            ['id' => 40, 'name' => 'EventController@index'],
            ['id' => 41, 'name' => 'EventController@create'],
            ['id' => 42, 'name' => 'EventController@store'],
            ['id' => 43, 'name' => 'EventController@edit'],
            ['id' => 44, 'name' => 'EventController@update'],
            ['id' => 45, 'name' => 'RedirectionController@index'],
            ['id' => 46, 'name' => 'RedirectionController@create'],
            ['id' => 47, 'name' => 'RedirectionController@store'],
            ['id' => 48, 'name' => 'RedirectionController@destroy'],
            ['id' => 49, 'name' => 'EventController@order'],
            ['id' => 50, 'name' => 'CustomerController@index'],
            ['id' => 51, 'name' => 'CustomerController@order'],
            ['id' => 52, 'name' => 'CustomerController@orderDetail']
        ];

        DB::table('modules')->insertOrIgnore($users);
    }

}
