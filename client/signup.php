



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>
<body>
<div class="container" style="margin-top:30px">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Sign Up </strong></h3>
     
  </div>
  
  <div class="panel-body">
     <form role="form">
          
            <div class="row">
    			<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" tabindex="1">
					</div>
				</div>
                
			</div>
			<div class="form-group">
				<input type="text" name="Username" id="Username" class="form-control " placeholder="Username" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control " placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						
					</div>
				</div>
			</div>
                                    <div class="input-group">
                                      <div class="checkbox" style="margin-top: 0px;">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>
                                    
                                            <button type="submit" class="btn btn-success">Sign in</button>
                                            
                                            <hr style="margin-top:10px;margin-bottom:10px;" >
                                            
                                            <div class="form-group">
                                    
                                        <div style="font-size:85%">
                                            Want to Go Home Page! 
                                        <a href="Login.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Login Here
                                        </a>
                                        </div>
                                    
                                </div> 
                         </form>
                     </div>
                </div>
           </div>
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>