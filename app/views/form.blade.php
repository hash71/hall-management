@extends('layouts.default.master')
@section('content')

<div class="main">
	<!-- row -->
	<div class="row">
		<!-- col 12 -->
		<div class="col-md-6">
			<!-- tile -->
			<section class="tile color transparent-black">
				<!-- tile header -->
				<div class="tile-header">
					<h1><strong>UTHAN</strong></h1>
					<div class="controls">
						<a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
						<a href="#" class="remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- /tile header -->
				<!-- tile body -->
				<div class="tile-body">
					<form class="form-horizontal" role="form" parsley-validate id="basicvalidations" action="{{URL::to('form_submit')}}" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="agency" class="col-sm-4 control-label">Agency</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="agency" name="agency">
							</div>
						</div>
						<div class="form-group">
							<label for="datepicker" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="datepicker" name="date">
							</div>
						</div>
						<div class="form-group">
							<label for="country" class="col-sm-4 control-label">Country</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="country" name="country">
							</div>
						</div>
						<div class="form-group">
							<label for="division" class="col-sm-4 control-label">Division</label>
							<div class="col-sm-8" id="selectbox">
								<select class="chosen-select chosen-transparent form-control" id="division" name="division">
									<option value="">Please choose</option>
									<option value="Division Name">Division Name</option>
									<option value="Division Name">Division Name</option>
									<option value="Division Name">Division Name</option>
									<option value="Division Name">Division Name</option>
									<option value="Division Name">Division Name</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="district" class="col-sm-4 control-label">District</label>
							<div class="col-sm-8" id="selectbox">
								<select class="chosen-select chosen-transparent form-control" id="district" name="district">
									<option value="">Please choose</option>
									<option value="District Name">District Name</option>
									<option value="District Name">District Name</option>
									<option value="District Name">District Name</option>
									<option value="District Name">District Name</option>
									<option value="District Name">District Name</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="thana" class="col-sm-4 control-label">Thana</label>
							<div class="col-sm-8" id="selectbox">
								<select class="chosen-select chosen-transparent form-control" id="thana" name="thana">
									<option value="">Please choose</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="thana" class="col-sm-4 control-label">Union</label>
							<div class="col-sm-8" id="selectbox">
								<select class="chosen-select chosen-transparent form-control" id="thana" name="union">
									<option value="">Please choose</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="thana" class="col-sm-4 control-label">Village</label>
							<div class="col-sm-8" id="selectbox">
								<select class="chosen-select chosen-transparent form-control" id="thana" name="village">
									<option value="">Please choose</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
									<option value="Thana Name">Thana Name</option>
								</select>
							</div>
						</div>
						

						<div id="parentelem">
							<div class="form-group" id="btnfield">
								<div class="col-sm-offset-4 col-sm-8">
									<input type="button" class="btn btn-primary" id="uthan" value="Uthan">
									<input type="button" class="btn btn-success" id="haat" value="Haat">
									<input type="button" class="btn btn-default" id="college" value="College">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="numval" class="col-sm-4 control-label">Total Contact</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" id="numval" placeholder="must be a number..." name="total_contact">
							</div>
						</div>
						
						<div class="form-group">	
							<p>Visit 1</p>
							<label for="datepicker" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="datepicker1" name="date1">
							</div>						
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Certificate</label>	
							<input type="file" name="certificate1" >
							<br>
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Images</label>
							<input type="file" name="images1[]" multiple>            
						</div>
						<div class="form-group">	
							<p>Visit 2</p>
							<label for="datepicker" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="datepicker1" name="date2">
							</div>						
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Certificate</label>	
							<input type="file" name="certificate2" >
							<br>
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Images</label>
							<input type="file" name="images2[]" multiple>            
						</div>
						<div class="form-group">	
							<p>Visit 3</p>
							<label for="datepicker" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="datepicker1" name="date3">
							</div>						
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Certificate</label>	
							<input type="file" name="certificate3" >
							<br>
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Images</label>
							<input type="file" name="images3[]" multiple>            
						</div>
						<div class="form-group">	
							<p>Visit 1</p>
							<label for="datepicker" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="datepicker1" name="date4">
							</div>						
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Certificate</label>	
							<input type="file" name="certificate4" >
							<br>
							<label for="colorpicker-rgb" class="col-sm-4 control-label">Images</label>
							<input type="file" name="images4[]" multiple>            
						</div>
						<div class="form-group form-footer">
							<div class="col-sm-offset-4 col-sm-8">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /tile body -->
			</section>
			<!-- /tile -->
		</div>
		<!-- /col 6 -->
		<!-- col 12 -->
	</div>
	<!-- /row -->
</div>
@stop

@section('custom_script')
	<script>

		$(document).ready(function(){


			$uthan_string = '\
			<div id="btn1group">\
				<div class="form-group">\
					<label for="ownerName" class="col-sm-4 control-label">Uthan Owner\'s Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="ownerName">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="phonenum" class="col-sm-4 control-label">Uthan Owner\'s Cell *</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="participantName" class="col-sm-4 control-label">Uthan Participant\'s Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="participantName">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="phonenum" class="col-sm-4 control-label">Uthan Participant\'s Cell *</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891">\
					</div>\
				</div>\
			</div>\
			';

			$haat_string = '\
			<div id="btn2group">\
				<div class="form-group">\
					<label for="ownerName" class="col-sm-4 control-label">Shop Owner\'s Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="ownerName" name="shop_owner_name">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="phonenum" class="col-sm-4 control-label">Shop Owner\'s Cell *</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891" name="shop_owner_mobile">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="participantName" class="col-sm-4 control-label">Haat Participant\'s Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="participantName" name="haat_participant_name">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="phonenum" class="col-sm-4 control-label">Haat Participant\'s Cell *</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891" name="haat_participant_mobile">\
					</div>\
				</div>\
			</div>\
			';

			$college_string = '\
			<div id="btn3group">\
				<div class="form-group">\
					<label for="ownerName" class="col-sm-4 control-label">College Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="ownerName" name="college_name">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="ownerName" class="col-sm-4 control-label">Principal Name</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="ownerName" name="principal_name">\
					</div>\
				</div>\
				\
				<div class="form-group">\
					<label for="phonenum" class="col-sm-4 control-label">Principal\'s Cell *</label>\
					<div class="col-sm-8">\
						<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891" name="principal_mobile">\
					</div>\
				</div>\
			</div>\
			\
			<div class="form-group">\
				<label for="ownerName" class="col-sm-4 control-label">Teacher Name</label>\
				<div class="col-sm-8">\
					<input type="text" class="form-control" id="ownerName" name="teacher_name">\
				</div>\
			</div>\
			\
			<div class="form-group">\
				<label for="phonenum" class="col-sm-4 control-label">Teacher\'s Cell *</label>\
				<div class="col-sm-8">\
					<input type="text" class="form-control" id="phonenum" parsley-trigger="change" parsley-required="true" parsley-type="phone" parsley-validation-minlength="0" placeholder="1234567891" name="teacher_mobile">\
				</div>\
			</div>\
		</div>\
		';

		$('#uthan').on('click',function(){

			$firstgroup = $('#btn1group');
			$secondgroup = $('#btn2group');
			$thirdgroup = $('#btn3group');

			
			if($secondgroup.length){
				$('#btn2group').remove();
			}

			if($thirdgroup.length){
				$('#btn3group').remove();
			}

			if(!$firstgroup.length){
				$('#parentelem').append($uthan_string);
			}
		});

		$('#haat').on('click',function(){

			$firstgroup = $('#btn1group');
			$secondgroup = $('#btn2group');
			$thirdgroup = $('#btn3group');

			
			if($firstgroup.length){
				$('#btn1group').remove();
			}

			if($thirdgroup.length){
				$('#btn3group').remove();
			}

			if(!$secondgroup.length){
				$('#parentelem').append($haat_string);
			}
		});

		$('#college').on('click',function(){
			
			$firstgroup = $('#btn1group');
			$secondgroup = $('#btn2group');
			$thirdgroup = $('#btn3group');

			
			if($firstgroup.length){
				$('#btn1group').remove();
			}

			if($secondgroup.length){
				$('#btn2group').remove();
			}

			if(!$thirdgroup.length){
				$('#parentelem').append($college_string);
			}
		});

	});

	</script>
@stop