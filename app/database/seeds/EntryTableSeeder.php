<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();




		foreach(range(1, 10) as $index){

			$cnumber = '017'.$faker->randomNumber($nbDigits = 8);

			if(strlen($cnumber)<11){
				while(1){
					if(strlen($cnumber) == 11)break;
					$cnumber .= "1";
				}
			}	

			Entry::create([

				'agency' => $faker->company,
				'date' =>$faker->dateTime($max = 'now'),
				'country'=>'Bangladesh',
				'division'=>'Dhaka',
				'district'=>'Dhaka',
				'thana'=>'dhana',
				'union'=>'dhunion',
				'village'=>'dhillage',
				
				'uthan_owner_name'=>$faker->name(),
				'uthan_owner_mobile'=>$cnumber,
				'uthan_participant_name'=>$faker->name(),
				'uthan_participant_mobile'=>$cnumber-1,

				'shop_owner_name'=>'',
				'shop_owner_mobile'=>'',
				'haat_participant_name'=>'',
				'haat_participant_mobile'=>'',
				

				'college_name'=>'',
				'principal_name'=>'',
				'principal_mobile'=>'',
				'teacher_name'=>'',
				'teacher_mobile'=>'',
				
				'total_contact'=>$faker->randomNumber($nbDigits = NULL),
				'certificate'=>'http://www.image.com', 
				'photo1'=>'http://www.image.com', 
				'photo2'=>'http://www.image.com', 
				'photo3'=>'http://www.image.com', 
				'photo4'=>'http://www.image.com', 
			]);
		}

		foreach(range(1, 10) as $index){

			$cnumber = '017'.$faker->randomNumber($nbDigits = 8);

			if(strlen($cnumber)<11){
				while(1){
					if(strlen($cnumber) == 11)break;
					$cnumber .= "1";
				}
			}
			
			Entry::create([

				'agency' => $faker->company,
				'date' =>$faker->dateTime($max = 'now'),
				'country'=>'Bangladesh',
				'division'=>'Dhaka',
				'district'=>'Dhaka',
				'thana'=>'dhana',
				'union'=>'dhunion',
				'village'=>'dhillage',

				'uthan_owner_name'=>'',
				'uthan_owner_mobile'=>'',
				'uthan_participant_name'=>'',
				'uthan_participant_mobile'=>'',

				'shop_owner_name'=>$faker->name(),
				'shop_owner_mobile'=>$cnumber,
				'haat_participant_name'=>$faker->name(),
				'haat_participant_mobile'=>$cnumber,
				

				'college_name'=>'',
				'principal_name'=>'',
				'principal_mobile'=>'',
				'teacher_name'=>'',
				'teacher_mobile'=>'',				
				
				
				'total_contact'=>$faker->randomNumber($nbDigits = NULL),
				'certificate'=>'http://www.image.com', 
				'photo1'=>'http://www.image.com', 
				'photo2'=>'http://www.image.com', 
				'photo3'=>'http://www.image.com', 
				'photo4'=>'http://www.image.com', 
			]);
		}

		foreach(range(1, 10) as $index){

			$cnumber = '017'.$faker->randomNumber($nbDigits = 8);

			if(strlen($cnumber)<11){
				while(1){
					if(strlen($cnumber) == 11)break;
					$cnumber .= "1";
				}
			}
			
			Entry::create([

				'agency' => $faker->company,
				'date' =>$faker->dateTime($max = 'now'),
				'country'=>'Bangladesh',
				'division'=>'Dhaka',
				'district'=>'Dhaka',
				'thana'=>'dhana',
				'union'=>'dhunion',
				'village'=>'dhillage',

				'uthan_owner_name'=>'',
				'uthan_owner_mobile'=>'',
				'uthan_participant_name'=>'',
				'uthan_participant_mobile'=>'',

				'shop_owner_name'=>'',
				'shop_owner_mobile'=>'',
				'haat_participant_name'=>'',
				'haat_participant_mobile'=>'',
				
				
				'college_name'=>$faker->name(),
				'principal_name'=>$faker->name(),
				'principal_mobile'=>$cnumber,
				'teacher_name'=>$faker->name(),
				'teacher_mobile'=>$cnumber,



				'total_contact'=>$faker->randomNumber($nbDigits = NULL),
				'certificate'=>'http://www.image.com', 
				'photo1'=>'http://www.image.com', 
				'photo2'=>'http://www.image.com', 
				'photo3'=>'http://www.image.com', 
				'photo4'=>'http://www.image.com', 
			]);
		}


	}

}