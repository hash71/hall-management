<?php

class EntriesController extends BaseController {

	public function store(){

		$entry = new Entry;

		$entry->agency = Input::get('agency');
		$entry->date = Input::get('date');
		$entry->country = Input::get('country');
		$entry->division = Input::get('division');
		$entry->district = Input::get('disctrict');
		$entry->thana = Input::get('thana');
		$entry->union = Input::get('union');
		$entry->village = Input::get('village');

		$entry->uthan_owner_name = Input::get('uthan_owner_name')?Input::get('uthan_owner_name'):'';
		$entry->uthan_owner_mobile = Input::get('uthan_owner_mobile')?Input::get('uthan_owner_mobile'):'';
		$entry->uthan_participant_name = Input::get('uthan_participant_name')?Input::get('uthan_participant_name'):'';
		$entry->uthan_participant_mobile = Input::get('uthan_participant_mobile')?Input::get('uthan_participant_mobile'):'';

		$entry->shop_owner_name = Input::get('shop_owner_name')?Input::get('shop_owner_name'):'';
		$entry->shop_owner_mobile = Input::get('shop_owner_mobile')?Input::get('shop_owner_mobile'):'';
		$entry->haat_participant_name = Input::get('haat_participant_name')?Input::get('haat_participant_name'):'';
		$entry->haat_participant_mobile = Input::get('haat_participant_mobile')?Input::get('haat_participant_mobile'):'';

		$entry->college_name = Input::get('college_name')?Input::get('college_name'):'';
		$entry->principal_name = Input::get('principal_name')?Input::get('principal_name'):'';
		$entry->principal_mobile = Input::get('principal_mobile')?Input::get('principal_mobile'):'';
		$entry->teacher_name = Input::get('teacher_name')?Input::get('teacher_name'):'';
		$entry->teacher_mobile = Input::get('teacher_mobile')?Input::get('teacher_mobile'):'';

		$entry->total_contact = Input::get('total_contact');
		

		for($i=1; $i<=4; $i++){

			$a = array();

			$index = 0;
			
			foreach (Input::file('images'.$i) as $image) {        
				
				$index++;
				
				$file = $image;

				if($file) {
					
					$destinationPath = public_path() . '/uploads/';
					$filename = time().$file->getClientOriginalName();
					$upload_success = $file->move($destinationPath, $filename);

					if ($upload_success) {
				// resizing an uploaded file


						Image::make($destinationPath . $filename)->resize(100, 100)->save($destinationPath . $filename);

					// return Response::json('success', 200);
					} else {
					// return Response::json('error', 400);
					}
				}
				$link = '<a href ='.'http:://localhost/public/uploads/'.$filename. '>'. 'image'.$index  . '</a>' ;
				array_push($a, $link);


			}
			$visit = 'visit'.$i;
			$entry->$visit = $a;

		}
		
		

		Entry::truncate();
		$entry->save();

		return "HELLO";

		
	}

}
