<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call([
            UserSeed::class,
        ]);
    //    factory('App\Model\User',8)->create();
       factory('App\Model\Bref',1)->create();
       factory('App\Model\Gallery',19)->create();
       factory('App\Model\News',90)->create();
       factory('App\Model\Question',9)->create();
       
         
    

    }
}
