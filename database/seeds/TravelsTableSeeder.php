<?php
use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i= 0; $i < 100; $i++){
            $new_travel = new Travel();
            
            $new_travel->travel_name = $faker->text(150);
            $new_travel->country = $faker->country;
            $new_travel->state = $faker->state;
            $new_travel->transport = $faker->randomElement(array('transportaereo','treno','mezzi propri','bus'));
            $new_travel->start = $faker->dateTime(null ,  null);
            $new_travel->description = $faker->text(500);
            $new_travel->return = $faker->dateTime(null ,  null);
            $new_travel->price = $faker->randomFloat(2 ,300,999999);
            $new_travel->notes = $faker->text(150);
            $new_travel->passport = $faker->boolean;
            $new_travel->vacancy = $faker->boolean;
            $new_travel->discount = $faker->boolean;

            $new_travel->save();
        }
    }
}
