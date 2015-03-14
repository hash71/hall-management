<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

{{HTML::script('assets/js/vendor/jquery/jquery.min.js')}}

<!-- Include all compiled plugins (below), or include individual files as needed -->

{{HTML::script('assets/js/vendor/bootstrap/bootstrap.min.js')}}

{{HTML::script('../../google-code-prettify.googlecode.com/svn/loader/run_prettifyf793.js?lang=css&amp;skin=sons-of-obsidian')}}
{{HTML::script('assets/js/vendor/mmenu/js/jquery.mmenu.min.js')}}
{{HTML::script('assets/js/vendor/sparkline/jquery.sparkline.min.js')}}
{{HTML::script('assets/js/vendor/nicescroll/jquery.nicescroll.min.js')}}
{{HTML::script('assets/js/vendor/animate-numbers/jquery.animateNumbers.js')}}
{{HTML::script('assets/js/vendor/videobackground/jquery.videobackground.js')}}
{{HTML::script('assets/js/vendor/blockui/jquery.blockUI.js')}}
{{HTML::script('assets/js/vendor/momentjs/moment-with-langs.min.js')}}
{{HTML::script('assets/js/vendor/datepicker/bootstrap-datetimepicker.min.js')}}

{{HTML::script('assets/js/vendor/chosen/chosen.jquery.min.js')}}

{{HTML::script('assets/js/vendor/parsley/parsley.min.js')}}

{{HTML::script('assets/js/minimal.min.js')}}

<script>

	$(function(){


		$(".chosen-select").chosen({disable_search_threshold: 10});

	});
	$('#datepicker').datetimepicker({
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-arrow-up",
			down: "fa fa-arrow-down"
		}
	});

	$("#datepicker").on("dp.show",function (e) {
		var newtop = $('.bootstrap-datetimepicker-widget').position().top - 45;      
		$('.bootstrap-datetimepicker-widget').css('top', newtop + 'px');
	});

	$('#datepicker1').datetimepicker({
		icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-arrow-up",
			down: "fa fa-arrow-down"
		}
	});

	$("#datepicker1").on("dp.show",function (e) {
		var newtop = $('.bootstrap-datetimepicker-widget').position().top - 45;      
		$('.bootstrap-datetimepicker-widget').css('top', newtop + 'px');
	});

</script>