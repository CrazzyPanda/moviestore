<?php

use Illuminate\Database\Seeder;
use App\Review;
use App\Customer;
use App\Movie;
use App\User;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();
        $review->title = "This was SHIT.";
        $review->text = "This movie was not really good. It really wasnt, No.";
        $review->starRating = "1";
        $review->date = "2018-11-25";
        $review->customer_id = User::where('name', 'Grace Cautley')->first()->customer->id;
        $review->movie_id = Movie::where('name', 'Coco')->first()->id;
        $review->save();

        $review = new Review();
        $review->title = "This was FANTASTIC.";
        $review->text = "This movie was really good. It really was. YAAASSS.";
        $review->starRating = "5";
        $review->date = "2016-11-25";
        $review->customer_id = User::where('name', 'Hosh Hoo')->first()->customer->id;
        $review->movie_id = Movie::where('name', 'Deadpool 2')->first()->id;
        $review->save();

        $review = new Review();
        $review->title = "This was OK.";
        $review->text = "This movie was ok. It really was. YAAASSS.";
        $review->starRating = "3";
        $review->date = "2016-11-25";
        $review->customer_id = User::where('name', 'Grace Cautley')->first()->customer->id;
        $review->movie_id = Movie::where('name', 'Fantastic Beast')->first()->id;
        $review->save();
    }
}
