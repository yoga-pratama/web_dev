
$('document').ready(function(){


 			$('#username').focus(); // Focus to the username field on body loads
			$('#login').click(function(){ // Create `click` event function for login
			var username = $('#username'); // Get the username field
			var password = $('#password'); // Get the password field
			var login_result = $('.login_result'); // Get the login result div
		

		

		login_result.html('loading'); // Set the pre-loader can be an animation
		if(username.val() == ''){ // Check the username values is empty or not
			username.focus(); // focus to the filed
			login_result.html('<span class="error"><label id="erorlabel">Enter the username </label></span>');
			return false;
		}
		if(password.val() == ''){ // Check the password values is empty or not
			password.focus();
			login_result.html('<span class="error"><label id="erorlabel">Enter the Password </label></span>');
			return false;
		}
		if(username.val() != '' && password.val() != ''){ // Check the username and password values is not empty and make the ajax request

				$.post("include/loginpage/serverside/loginController.php", $('form').serialize(), function(message){
					if(message == 0){
					login_result.html('<span class="error">Username or Password Incorrect!</span>');
				}
				else if(message == 1){
					window.location = 'index.php';
				}
				else{
					alert('Problem with sql query');
				}

				});
		}
		return false;
	});


});