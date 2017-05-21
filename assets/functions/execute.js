var app = angular.module('app', ['ngMessages']);

    // select 2 
    $(document).ready(function() {
        $(".select2").select2({
          placeholder: "Select a gender",
          allowClear: true
        });
      });
    // POST 
var rand = Math.floor(Math.random() * 999999);

function post()
{

	$(document).ready(function(){
		$('#post').click(function(e){
			e.preventDefault();
			var url  = 'execute/post_comment/'+rand;
			var data = $('form').serialize();
			$.ajax({
				type:'POST',
				url: url,
				data: data,
				success:function(response){

					// $('button').html('Please wait...').attr('disabled',true);
					// $('button').attr('disabled',true);
					// $('button').html('<i class="fa fa-check-circle"></i> Submit');
					// $('button').attr('disabled',true);
					if (response == 'success') {
						$('#postForm')[0].reset();
						$('#notif').html('<span class="alert alert-success animated bounceIn flat col-md-12 col-xs-12"> Success!</span>').fadeIn().delay(3000).fadeOut('slow');

					} 
				}
			});
		});
	});

}

	// // Login2
	// $(document).ready(function(){
	// 	$('#register').click(function(e){
	// 		e.preventDefault();
	// 		$('#register').html('Please wait...').prop('disabled',true);
	// 		setTimeout(function(){
	// 			location.href='<?php echo$url?>';
	// 		},2000);
	// 	});
	// });


function delete_post() {

}



function register() {

	$(document).ready(function(){
		$('#register').click(function(e){
			e.preventDefault();
			var url  = 'execute/register';
			var data = $('form').serialize();
			$.ajax({
				type:'POST',
				url: url,
				cache: false,
				data: data,
				success:function(response){
					// $('button').html('Please wait...').attr('disabled',true);
					// $('button').attr('disabled',true);
					// $('button').html('<i class="fa fa-check-circle"></i> Submit');
					// $('button').attr('disabled',true);
					if (response == 'duplicated') {
					$('#notif').html('<span class="alert alert-danger animated bounceIn col-md-12 col-xs-12"><i class="fa fa-remove"></i> Email is already exist.</span>');
					} else {
					$('#notif').html('<span class="alert alert-success animated bounceIn col-md-12 col-xs-12"><i class="fa fa-check-circle"></i> Successfully registered.</span>');
					}
				}
			});
		});
	});

}

function login() 
{

	$(document).ready(function(){
		$('#btn-login').click(function(e){
			e.preventDefault();
			var url  = 'execute/login';
			var data = $('form').serialize();
			$.ajax({
				type:'POST',
				url: url,
				data: data,
				success:function(response){
					// $('button').html('Please wait...').attr('disabled',true);
					// $('button').attr('disabled',true);
					// $('button').html('<i class="fa fa-check-circle"></i> Submit');
					// $('button').attr('disabled',true);
					switch(response)
					{
						case 'error':
						$('#notif').html('<span class="alert alert-danger animated bounceIn col-md-12 col-xs-12"><i class="fa fa-remove"></i> Invalid username or password.</span>');
						// new PNotify({text: 'Invalid username or password.',type: 'error',styling: 'bootstrap3',});
						break;

						case 'admin':
						location.href= 'dashboard';
						break;

						case 'member':
						location.href= 'home';
						break

						default:
						$('#notif').html('<span class="alert alert-danger animated bounceIn col-md-12 col-xs-12"><i class="fa fa-remove"></i> Complete all fields.</span>');
						// new PNotify({text: 'Complete all fields.',type: 'error',styling: 'bootstrap3',});
						break;
					}
				}
			});
		});
	});

}



// upload profile
function getFile() {
   document.getElementById("file").click();
}

function sub(obj) {
    var file = obj.value;
    var fileName = file.split("\\");
    document.getElementById("file").innerHTML = fileName[fileName.length-1];
    document.changeprofile.submit();
}
