<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class schedule extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will be clean db table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $old_name = 'C:/xampp/htdocs/laravel/laravel-for-testing/public/images/';
        $destination = 'C:/xampp/htdocs/laravel/laravel-for-testing/public/img';
//        $imgage = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/photos'));
        $imgage = scandir('C:/xampp/htdocs/laravel/laravel-for-testing/public/images/');

        $imageToDelete = "C:/xampp/htdocs/laravel/laravel-for-testing/public/images/24f355.jpeg";

        if(File::exists($imageToDelete)){
            File::delete($imageToDelete);
            echo 'deleted';exit;
        }else{
            echo 'not deleted';exit;
        }


//        var_dump($imgage);
        foreach($imgage as $key => $img){

            if($img != "." && $img != ".."){
                copy($old_name . "/" .$img, $destination . "/" . $img);
                rename($old_name . "/" .$img, $destination . "/" . $img);

            }

        }
    }
}
