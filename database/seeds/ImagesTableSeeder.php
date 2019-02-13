<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imageArray = array(
            'cover/default.png', 'cover/avengers-infinity-war.jpg', 'cover/coco.jpg',
            'cover/deadpool-2.jpg', 'cover/fantastic-beasts.jpg', 'cover/oceans-.jpg',
            'cover/the-greatest-showman.jpg', 'cover/incredibles-2.jpg', 'cover/ant-man-and-the-wasp.jpg'
        );
        foreach($imageArray as $i){
            $image = new Image();
            $image->path = $i;
            $image->save();
        }
    }
}
