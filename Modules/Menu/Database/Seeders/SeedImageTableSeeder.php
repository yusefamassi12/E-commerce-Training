<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Menu\Entities\image;

class SeedImageTableSeeder extends Seeder
{
    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Model::unguard();
        DB::table('images')->insert([
            'photoable_type' => 'Modules/Menu/Entities/Category',
            'photoable_id'=>'1',
            'src' =>'test_'.'1'.'.jpg',
        ]);

        // $this->call("OthersTableSeeder");
    }
}
