function handleLogin() {
		    var form = $("#loginForm"); 
		    var e = $('[id ="email"]').val();
		    var p = $('[id ="passwd"]').val();
		    console.log("click");
		    if(e != "" && p != "") {
			    $.ajax({
				    type: 'POST',
				    url: 'http://46.226.111.178/login.php',
				    crossDomain: true,
				    data: {email: e, passwd :p },
				    dataType: 'json',
				    async: false,
				    success: function (response){
				    	//alert ("response");
			    		if(response.success) {
				    		//alert("you're logged in");
						window.localStorage['email'] = e;
                        			window.localStorage['password'] = p;
							//posts the values to php file to store android gcm_id and email							
							$.ajax({
								type: 'POST',
								url: 'http://46.226.111.178/registerForPush.php',
								crossDomain: true,
								data: {email: _email, gcm_regid: _regid},
								dataType: 'json',
								async: false,
							});
						$.mobile.changePage($('#message', null, false, false));		
			    		}else{
				    		alert("Your login failed");
				    		$.mobile.changePage($('#login'));
			    		}
			    	},
			    	error: function(error){
			    		alert('Could not connect to the database' + error);
			    	}
			    });
			   }else{//if the email and password is empty
				   alert("You must enter email and password");
				   $.mobile.changePage($('#login'));
			    }
		    return false;
		    }