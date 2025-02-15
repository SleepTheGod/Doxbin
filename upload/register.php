<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	
    <title>Register - Doxbin</title>
    <link rel="stylesheet" href="legacy/index.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<style>
    .register-div{
        margin: 0 auto;
        max-width: 500px;
        min-width: 100px;
        width: 100%;
        text-align: left;
    }
    .register-div label{
        padding: 10px 0px 1px 3px;
        margin: 0;
    }
	input{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: inline-block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
        width: 100%;
	}
	input::placeholder{
		color: rgb(167, 167, 167);
	}
	input[type=submit]{
		line-height: 1.2;
		color: white;
		background: #282828;
		border: 0;
		border-radius: 2px;
		display: block;
		-webkit-font-smoothing: antialiased;
		outline: none;
		padding: 7px 5px;
        width: 90%;
        margin: 15px auto 50px auto;
	}
	input{
		font-size: 100%;
	}
	
	input[type=submit]:hover{
		color: white;
		background: #3d3d3d;
		text-decoration: none;
	}
	.center {
	  text-align: center;
	}
    .wcon{
        background-color: #1f1f1f;
        width: 100%;
        border-radius: 5px;
        margin: 0 0 20px;
        box-shadow: 0 1px 3px #0a0b0d;
        padding: 10px 20px;
        position: relative;
        display: inline-block;
        -webkit-box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
        box-shadow: inset 0px 0px 3px 0px rgba(0,0,0,0.75);
        text-align: right;
    }
    .wcon p{
        margin-bottom: 3px;
    }
	</style>
</head>

<body>
<input type="hidden" name="_token" value="paeQPPF4PwSbqKLYaVxavvNeFyHTtz8b2a8loCAF">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://doxbin.org/">Doxbin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
                <li><a href="/Doxbin-2.0/upload/index.php">Add Paste</a></li>
                <li><a href="/Doxbin-2.0/users.php">Users</a></li>
                            </ul>
            <div class="sidebar-right">
                                    <ul class="nav navbar-nav">
                        <li ><a href="/login">Login</a></li>
                        <li class="active"><a href="/register">Register</a></li>
                    </ul>
                            </div>
        </div>
    </div>
</nav>
    <div class="container" style="background-color: #111111; min-height: 100vh;-webkit-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);-moz-box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);box-shadow: 0px 0px 7px 0px rgba(31,31,31,1);">
        <div class="col-md-12" style="margin-top: 10px;">
            <div class="col-md-12" style="margin-top: 80px;">
                <div align="center">
                    <h5 style="font-size: 25px;">Create Account</h5>
                    <p style="color:white;">Save your account info somewhere; if you forget it we will not reset it for you.</p>
                    <noscript><p style="color: red; padding: 0px 0px 10px 0px; text-align: center; margin: 0;">Doxbin requires JavaScript to function correctly.</noscript>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="register-div">
                <div id="error-msg" style="color: red; padding: 10px 0px 0px 0px; text-align: center; margin: 0;"></div>
                <form action="" method="POST" id="register-form">
                <input type="hidden" name="_token" value="paeQPPF4PwSbqKLYaVxavvNeFyHTtz8b2a8loCAF">
                <label for="username">Username</label><br>
                <input name="username" id="username" type="text" placeholder="Username" autofocus><br>
                <label for="username">Email</label><br>
                <input id="email" type="text" placeholder="Email (not required)"><br>
                <label for="username">Password</label><br>
                <input id="password" type="password" placeholder="Password"><br>
                <label for="username">Confirm Password</label><br>
                <input id="confpass" type="password" placeholder="Confirm Password"><br><br>
                
                <input type="submit" value="Register">
                </form>
                </div>
            </div>
            
        </div>
    </div>
    <script src="https://doxbin.org/legacy/jquery.min.js"></script>
    <script src="https://doxbin.org/legacy/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://v2.bytefend.com/libs.js" defer></script>
    <script type="text/javascript" src="https://v2.bytefend.com/api.js" defer></script>

    <script type="text/javascript">
		$('#register-form').on('submit', function(e){
            console.log('BotProtect token request.');
            window.BotProtect.register({
                publicKey: 'IW6Ln3zNuCWJK03FQshvS7WZBK620EjN',
                callback: function(token) {
                    console.log(token);
                    $.post('/register', {
                        username: $('#username').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        confpass: $('#confpass').val(),
                        _token: $('input[name=_token]').val(),
                        bpToken: token
                    }, function(resp){
                        if(resp.status == "err"){
                            $('#error-msg').text(resp.msg);
                        }else{
                            window.location = '/';
                        }
                    });
                }
            });
            e.preventDefault();
        });
    </script>
</body>
</html>