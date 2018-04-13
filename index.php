<!DOCTYPE html>
<html>
<head>
	<title>HNG Internships</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$("#time").load('printtime.php');
		},1000);
	});
</script>
<style>
html,body{
	position: relative;
	height: 100%;
	width: 100%;
}
	.container{
	
		width: 100%;
		height: 800px;
		background:#ffffff;
		position: relative;
	}

	.bottom{
		top:300px;
		height: 400px;
		width:100%;
		position: relative;
		background: #E86B6B;
	}

	.floater
	{
		
    width: 385px;
    height: 400px;
    background: #ffffff;
    position: absolute;
    border: 1px solid #E86B6B;
    border-bottom: none;
    border-radius: 5px;
    
    right: 60px;
    top: 70px;
    z-index: 233;
	}
	#username{
		width:250px;
		
		border-radius:0;
		left:83px;
		height: 20px;
		padding: 6px 12px;
		position: absolute;
		
	}
	#username,.at
	{
		top:100px;
		border:1px solid #eee;
		
	}
	
	#password,.pass
	{
		top:150px;
		border:1px solid #eee;
	}

	.pass
	{
		left: 40px;
		position: absolute;
		padding: 6px 13px;
		background: #eee;

	}
	#password
	{
		
		left: 80px;
		width: 253px;
		height: 20px;
		padding: 6px 12px;
		position: absolute;
	}
	#submit
	{
		position: absolute;
		right: 27px;
		top: 202px;
		border-radius: 0;
		height: 40px;
		width: 150px;
		padding: 6px 12px;
		background: #3498db;
		border:none;
		color: #fff;
	}
	#submit:hover
	{
		background: #2980b9;
		width: 152px;
		cursor: pointer;
	}
	.at
	{
	left: 40px;
	padding: 6px 12px;
    font-size: 20px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    
    border-right: none;
    
    position: absolute;
	}
	.input-group{
		margin-bottom: 10px;
		
	}
	.label
	{
		font-family: Cambria;
		font-size:24px;
		font-weight: 20;
		color:#000;
		position: absolute;
		left:150px;

	}
	h3
	{
		margin: 3px;
	}
	form
	{

		position: relative;
	}
	.forgot
	{
		position: absolute;
		top: 250px;
		right: 27px;
		font-size: 12px;
	}
	 .forgot a
	 {
	 	text-decoration: none;
	 	color: #3498db;
	 }
	 .title
	 {
	 	position: absolute;
	 	left: 25%;
	 	font-size:28px;
	 	top: 40px;
	 }
	 #time
	 {
	 	position: absolute;
	 	left: 29%;
	 	font-size:28px;
	 	top: 190px;
	 	font-family: "Century Gothic"
	 }
	 .button
	 {
	 	top:40px;
	 	height:40px;
	 	padding:6px 13px;
	 	position: absolute;
	 	left: 26%;
	 	border:1px solid #fff;
	 	background: #E86B6B;
	 	color: #fff;
	 	font-size: 15px;
	 	width: 190px;

	 }
	 .button:hover
	 {
	 	cursor: pointer;
	 }
</style>

<body>
	<div class="container-fluid">
		<div class="floater">
		<form>
			<h3 class="label">Log In</h3>
			    <div class="input-group">
				    <span class="at">@</span>
				    <input id="username" type="text"   name="username" placeholder="amolocaleb">
			    </div>
			    <div class="input-group">
				    
				    <input id="password" type="password"   name="password" placeholder="Password">
			    </div>
			    <br>
			    <div class="input-group">
				    <span class="pass"><img src="pass.ico"></span>
				    <input id="submit" type="submit"    value="Log In">
			    </div>
			    <p class="forgot">forgot password?<a href="">Click here</a></p>
			    
		</form>
		</div>
		<p class="title">Hotels NG Internship</p>
		<div id="time"></div>
		
		<div class="bottom">
			<button class="button">New Here?Get Started</button>
		</div>

	</div>
	
</body>
</html>