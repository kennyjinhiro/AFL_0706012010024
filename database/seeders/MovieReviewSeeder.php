<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MovieReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'1',
            'moviereview_user'=>'ops-52535',
            'moviereview_rating'=>'4',
            'moviereview_comment'=>'Survivor of this , indeed utopian apocalyptic sci-fi drama, making new friends out of what he has at hand, hes very well equiped both on material and intelectual capacities, a lot more than as a sole survivor after a plane crash in the pacific that made a film some decades ago.

            Its a film full of special effects, and exploding visual colours, allthough the atmosphere is dazed out by dust and dirt, the filmographers do give this film a solesurviving glow of hope. Its a film about artificial friendship, may feel slow at times, but it gives more than it takes thinks the grumpy old man. Mr finch is the sole survivor i do wanna be. A recommend.',
            'movie_id'=>'MOV002',
            'moviereview_date'=>'2021-11-07 16:58:23'
        ]);
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'2',
            'moviereview_user'=>'andrewchristianjr',
            'moviereview_rating'=>'4',
            'moviereview_comment'=>"Loved it. It's Tom Hanks, a robot and a dog - what's not to love? From the life lessons, tender relationships portrayed between human and robot, human and dog, and the action-packed suspenseful scenes - it's a fun wild ride that had me laughing and crying and hugging my dog.",
            'movie_id'=>'MOV002',
            'moviereview_date'=>'2021-11-07 17:00:19'
        ]);
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'3',
            'moviereview_user'=>'TheLittleSongbird',
            'moviereview_rating'=>'5',
            'moviereview_comment'=>"This is probably the best musical ever made. It is fantastic!!! It is loosely based on Romeo and Juliet, but it means that west Side Story had an inspiration, and it is told movingly and powerfully. Right from minute one I knew we were going to be in for a treat. The prologue was brilliantly staged, as was the rumble, which I found a bit disturbing to be honest! Quintet was thrilling also. Richard Beymer and Natalie Wood are wonderful as the two lovers, Wood is very heartfelt and Marni Nixon's singing for her is the very definition of angelic, as is Russ Tamblyn as a very energetic Riff. George Chakiris is also good as Bernado, though I would have given the Best Supporting Actor Oscar to Tamblyn, but it is Rita Moreno as fiery Anita who impressed most, easily one of the best supporting turns of any musical. The songs are fantastic, one of those musicals where every song works, some are funny; \"America\"(amazing choreography) and \"Officer Krupkee\" and some heart rending ones; \"Tonight\" \"One Hand One Heart\" and \"Somewhere\". The choreography was enough to have you on the edge of your seat. Everything is right about this movie, and I am shocked it isn't in the top 250, because it should be for it is one of the greatest film musicals! 10/10 without question!",
            'movie_id'=>'MOV003',
            'moviereview_date'=>'2021-11-07 17:02:44'
        ]);
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'4',
            'moviereview_user'=>'Leofwine_draca',
            'moviereview_rating'=>'4',
            'moviereview_comment'=>"WEST SIDE STORY is everything a musical should be - epic, colourful, heartfelt and packed to the brim with rousing music, singing and dance numbers. Loosely based on ROMEO AND JULIET, this tells of the tragedy that arises when two people from opposite sides of the street fall in love.

            The story is brought to lively and vivid life by Robert Wise, one of the era's most reliable directors, and the transfer I watched makes it look absolutely stunning, with the huge street backdrops adding a really unique feel to the various choreographed numbers. Put simply, this is one of the most memorable musicals of all time because it stands alone in look and feel to all the rest.
            
            The cast are fine, typically better at the singing and dancing than they are at the acting, but then that's where it counts. Natalie Wood and Richard Beymer are the headliners with the romantic storyline, but I found the ethnic support from George Chakiris and Rita Moreno to be even stronger - and the energetic Russ Tamblyn, of course. In any case, there's nothing to dislike here; this is a classic for plenty of reasons, and all of them are good.",
            'movie_id'=>'MOV003',
            'moviereview_date'=>'2021-11-07 17:03:35'
        ]);
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'5',
            'moviereview_user'=>'SnoopyStyle',
            'moviereview_rating'=>'3',
            'moviereview_comment'=>"This is a prequel to Army of the Dead (2021). Sebastian (Matthias Schweighöfer) is a mild-mannered bank teller by day and a YouTube expert on safes by night. His clip has one view. It's master thief Gwendoline (Nathalie Emmanuel) and she recruits him into her gang. They're planning to breaking into three legendary safes.

            This is an origin story but nobody was asking for one. It's fine. The whole point of the original is zombies. This one kept the zombies by putting them into nightmares. It's not the same thing. It's fine. Korina has some minor fun. Sebastian and Gwen are good. It's a lot of fine.",
            'movie_id'=>'MOV004',
            'moviereview_date'=>'2021-11-07 17:05:45'
        ]);
        DB::table('moviereviews')->insert([
            'moviereview_id'=>'6',
            'moviereview_user'=>'paul_haakonsen',
            'moviereview_rating'=>'1',
            'moviereview_comment'=>"Wow, the prequel that you never knew would happen and you never really wanted. Now, the 2021 movie \"Army of the Dead\" was somewhat of a swing and a miss, and then comes the follow-up, which actually is a sequel about the character that was one of the least interesting. So this definitely has the ingredients for a smash hit. Right?

            Wrong.
            
            I didn't even know that they were making a prequel before I stumbled upon it by random chance on Netflix. And seeing that it was about Dieter (played by Matthias Schweighöfer), then I wasn't really particularly stoked. But still, I opted to give \"Army of Thieves\" a chance. So I watched it.
            
            And felt like I had just effectively wasted a little more than two hours of my life. Wow, this movie was even worse than \"Army of the Dead\". At least \"Army of the Dead\" had zombies in it. \"Army of Thieves\" was just a boring and pointless heist movie. Nothing more, nothing less. And heist movies doesn't really get me worked up.
            
            So yeah, the storyline written by Shay Hatten and directed by lead actor Matthias Schweighöfer himself, just didn't bring much entertainment or enjoyment to the table for me. And while I did manage to sit through the entire ordeal, I can honestly say that this is not a movie that I will ever return to watch a second time, nor is it a movie I would recommend you wasting your time or effort on.
            
            Sure, they had a good ensemble of actors and actresses on the cast list here, but it didn't really matter much as the storyline itself fell short of providing me with an entertaining viewing.",
            'movie_id'=>'MOV004',
            'moviereview_date'=>'2021-11-07 17:06:16'
        ]);
    }
}
