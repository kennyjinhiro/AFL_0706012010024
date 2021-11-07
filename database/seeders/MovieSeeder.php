<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([ 
            'movie_id'=>'MOV001',
            'movie_title'=>'Moonfall',
            'movie_rating'=>'4.4',
            'movie_description'=>'A mysterious force knocks the Moon from its orbit around Earth and sends it hurtling on a collision course with life as we know it. With mere weeks before impact and the world on the brink of annihilation, NASA executive and former astronaut Jo Fowler (Halle Berry) is convinced she has the key to saving us all – but only one astronaut from her past, Brian Harper (Patrick Wilson) and conspiracy theorist K.C. Houseman (John Bradley) believe her. These unlikely heroes will mount an impossible last-ditch mission into space, leaving behind everyone they love, only to find out that our Moon is not what we think it is.',
            'movie_year'=>'2021',
            'movie_genre'=>'Science',
            'movie_picture'=>'img/XEMTsZywS5OShcvC2F6nzmqdAK4xEzBFa8JppHSO.jpg',
            'movie_background_picture'=>'img/1VOlqoz9EP0JJxO5SXQhImuiifdLhutn0d9efuzc.jpg'
        ]);
        DB::table('movies')->insert([ 
            'movie_id'=>'MOV002',
            'movie_title'=>'Finch',
            'movie_rating'=>'4.5',
            'movie_description'=>'Ten years have passed since a solar flare destroyed the ozone layer, increasing temperatures to 65 degrees Celsius (149 degrees Fahrenheit) and turning the planet Earth into a largely uninhabitable wasteland scorched by ultraviolet radiation and subject to extreme weather events. One of the few survivors, Finch Weinberg, a robotics engineer, lives alone with his dog, Goodyear, and a helper robot, Duey, in an underground St. Louis laboratory once owned by the company he worked for before the cataclysm. Finch only ventures outside to search for supplies with a heat and ultraviolet-resistant protective suit.',
            'movie_year'=>'2021',
            'movie_genre'=>'Action',
            'movie_picture'=>'img/JlfI3pqb3g1I65o974ZprKgwdITUoIISSm44KKJ3.jpg',
            'movie_background_picture'=>'img/oevjvVyWByPFat7IVesDcW06Sqbl9LA47v42FETu.png'
        ]);
        DB::table('movies')->insert([ 
            'movie_id'=>'MOV003',
            'movie_title'=>'West Side Story',
            'movie_rating'=>'4.5',
            'movie_description'=>'In 1947, Jerome Robbins approached Leonard Bernstein and Arthur Laurents about collaborating on a contemporary musical adaptation of Romeo and Juliet. He proposed that the plot focus on the conflict between an Irish Catholic family and a Jewish family living on the Lower East Side of Manhattan, during the Easter–Passover season.',
            'movie_year'=>'2021',
            'movie_genre'=>'Action',
            'movie_picture'=>'img/O9LmwMG43WNL5aiagIwvoWT2g79MkKwRdEFKI4VW.jpg',
            'movie_background_picture'=>'img/mM3uSRe1WyX5Ln5DdkTrHQx9FxgVqMXwIaIdkvxS.jpg'
        ]);
        DB::table('movies')->insert([ 
            'movie_id'=>'MOV004',
            'movie_title'=>'Army of Thieves',
            'movie_rating'=>'4.4',
            'movie_description'=>'A prequel, set before the events of Army of the Dead, which focuses on German safecracker Ludwig Dieter leading a group of aspiring thieves on a top secret heist during the early stages of the zombie apocalypse. “Army of Thieves” takes place six years before the action of “Army of the Dead” as the world is just starting to come to terms with the reality of a zombie outbreak—it’s mostly seen on news reports in the background and in a few of Dieter’s prophetic dreams.',
            'movie_year'=>'2021',
            'movie_genre'=>'Action',
            'movie_picture'=>'img/Z5Rxd4KAmhj5QnqYaw8TUie9hSuQVMnnbMX3PzHu.jpg',
            'movie_background_picture'=>'img/K43KTeOYNR1cA3DOl34n57hqUzqDrH7lveOmQLj9.jpg'
        ]);
        DB::table('movies')->insert([ 
            'movie_id'=>'MOV005',
            'movie_title'=>'Bruised',
            'movie_rating'=>'3.15',
            'movie_description'=>'Years after walking away from her promising career, aging mixed martial arts (MMA) fighter Jackie Justice accepts an offer to fight the top female MMA fighter in an unsanctioned bout while also dealing with the unexpected return of her 6-year-old son, whom she gave up for adoption as an infant. Hence, a disgraced MMA fighter finds redemption in the cage and the courage to face her demons when the son she had given up as an infant unexpectedly reenters her life.',
            'movie_year'=>'2021',
            'movie_genre'=>'Action',
            'movie_picture'=>'img/VF7mBLkppVlYdXCB0yRkTY93c8gcXUIIfB1kGNv8.jpg',
            'movie_background_picture'=>'img/jXB5ove66541UNU9yu8c8qOmTu18JgAtCpJY5mK6.jpg'
        ]);
    }
}
