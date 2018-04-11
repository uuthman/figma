<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>current time</title>
</head>
<style>
    *{
        background: #E5E5E5;
             }
	.rectangle{
		position: absolute;
		width: 828px;
		height: 42px;
		left: 0px;
		top: 0px;
		background: #B2CFBE;
	}

	.main-body{
		position: relative;
		width: 828px;
		height: 494px;
		left: 223px;
		top: 90px;
		background: #1BE023;
		mix-blend-mode: normal; 
	}

	.rectangle1{
		position: absolute;
		width: 828px;
		height: 43px;
		left: 0px;
		top: 451px;
		background: #B2CFBE;
	}
	.welcome-font{
        position: absolute;
		width: 264px;
		height: 53px;
		left: 295px;
		top: 87px;
		font-family: Rhodium Libre;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 24px;
		text-align: center;
		color: #827878;
		text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		background:#1BE023; 
	}

	.successful{
		position: absolute;
		width: 683px;
		height: 60px;
		left: 95px;
		top: 140px;
		font-family: Rammetto One;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 24px;
		text-align: center;
		color: #827878;
		background: #1BE023;
	}

	.time{
		position: absolute;
		width: 289px;
		height: 80px;
		left: calc(50% - 289px/2 + 25.5px);
		top: 248px;
		background: #F2EBEB;
	}

	  div.time .current-time{
		position: absolute;
		width: 112px;
		height: 29px;
		left: 100px;
		top: 29px;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 24px;

		color: #000000;
	}

	div.side-footer{
		position: absolute;
		width: 212px;
		height: 22px;
		left: 576px;
		top: 426px;
		font-family: Roboto;
		font-style: italic;
		font-weight: normal;
		line-height: normal;
		font-size: 18px;
		color: #000000;
		background:#1BE023;
	}
</style>
<body>

<div class="main-body">
    <div class="rectangle">
</div>
    <div class="welcome-font">WELCOME, MARK</div>
    <div class="successful">You have access to the current time, CONGRATULATIONS!! </div>
    <div class="rectangle1">	
    </div>
    <div class="time">
    	<div class="current-time"><?php
    	date_default_timezone_set('Africa/Lagos');
    	$current = date('h:i a');
    	echo $current;
?>
    	 </div>
    </div>
    <div class="side-footer">
    	powered by Ayinde uthman
    </div>
	</div>
</body>
</html>