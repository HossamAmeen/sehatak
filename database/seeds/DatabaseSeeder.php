<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {

       factory('App\Model\User',8)->create();
       factory('App\Model\Bref',1)->create();
       factory('App\Model\Gallery',9)->create();
       factory('App\Model\News',9)->create();
       factory('App\Model\Question',9)->create();
       
          $this->call([
            UserSeed::class,
        ]);
    

    }
}
