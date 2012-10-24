<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Home page</title>
<style>
body {width:100%;
		background-image:url(images/home_bg);
		background-repeat:no-repeat;
		background-position:center;}
#home_left {
	width: 500px;
    margin:5px;
    background-color: rgba(21, 2, 17, 0.3);
	height:auto;
	float:left;
}

#home_left h2 {
	color:white;
	font-family:Georgia, "Times New Roman", Times, serif;
	}
	
#home_right {
	width: 500px;
    margin:5px;
	height:auto;
	float:right;
	box-shadow: 10px 10px 5px #888888;
	background-color: rgba(21, 2, 17, 0.3);
}

#hr_top {
	box-shadow: 10px 10px 5px #888888;
	}
	
#hr_bottom {
	box-shadow: 10px 10px 5px #888888;
	}
</style>

</head>

<body>

	<div id="home_left">
    	<div id="intro">
        	<h2>Urban Backyard!</h2>
        	<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, </p>
        
        </div>
    </div><!--closes home_left-->
    
    <div id="home_right">
    	<div id="hr_top">
        	<h3>Member Sign-In</h3>
            <form>
                User Name: <input type="text" name="username"><br>
                Password: <input type="text" name="password"><br />
                <input type="submit" value="Submit">
            </form>  
        </div><!--close hrtop-->
        <div id="hr_bottom">
        	<h3>New to Urban Backyard? Sign up NOW!</h3>
            <form>
                Full Name: <input type="text" name="fullname"><br>
                Email: <input type="text" name="email"><br />
                Password: <input type="text" name="password"><br />
                <input type="submit" value="Submit" name="Sign Up for Cluck!">
            </form>  
        </div><!--close hrtop-->
    </div><!--closes home_right-->
    
</body>
</html>