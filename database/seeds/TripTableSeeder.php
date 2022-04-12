<?php
//richiamo il model
use App\Trip;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 30; $i++){

            $newTrip = new Trip();

            $newTrip->destination = $faker->state();
            $newTrip->address = $faker->streetAddress();
            $newTrip->departure_airport = $faker->state();
            $newTrip->departure_date = $faker->dateTimeBetween('now','+200 days');
            $newTrip->duration_holiday =  $faker->numberBetween (4,13);
            $newTrip->city = $faker->city();
            $newTrip->rating = $faker->numberBetween(0,10);
            $newTrip->price = $faker->randomFloat(2,1000,5000);

            $newTrip->save();
        }
        
    }
}
