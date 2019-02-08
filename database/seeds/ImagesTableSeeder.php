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
            'covers/default.png', 'images/avengers-infinity-war.jpg', 'images/coco.jpg',
            'images/deadpool-2.jpg', 'images/fantastic-beasts.jpg', 'images/oceans-.jpg',
            'images/the-greatest-showman.jpg', 'images/incredibles-2.jpg', 'images/ant-man-and-the-wasp.jpg'
        );
        foreach($imageArray as $i){
            $image = new Image();
            $image->path = $i;
            $image->save();
        }
    }
}
