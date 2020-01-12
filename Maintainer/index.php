<?php
include('../Drinks/Drink.php');
include('./Transaction.php');
include('../db_connect.php');
session_start();
$sql = "SELECT name, price, quantity from drinks where on_sale=1";
$exec = mysqli_query($db, $sql);
isset($total_coin) ? $total_coin : $total_coin = array();
$total = 0;
$temp;
$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageWasRefreshed ) {
   $_SESSION['total'] = 0;
} else {
   //do nothing;
}
?>
<html>
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <title>Maintainer Panel</title>
    </head>
	  
    <style>
        .title
        {
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #000000;
            margin-top: 5px;
        }
		.sub
		{
			text-transform: uppercase;
            text-align: center;
            color: #000000;
            margin-top: 5px;
		}
        .content
        {
            margin-top:30px;
            height: 1100px;
            max-height: 1100px;
            /* max-width: 800px; */
            width: 700px;
            background-color: #E6E6FA;
        }
		.password_input
		{
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
		}

		/* Style the submit button */
		input[type=submit] {
		background-color: #4CAF50;
		color: white;
		}
		
		/* Style the container for inputs */
		.container {
		background-color: #f1f1f1;
		padding: 20px;
		}
		
		/* The message box is shown when the user clicks on the password field */
		#message {
		display:none;
		background: #f1f1f1;
		color: #000;
		position: relative;
		padding: 20px;
		margin-top: 10px;
		}
		
		#message p {
		padding: 10px 35px;
		font-size: 18px;
		}
		
        #insert_coin
        {
            text-transform: uppercase;
            color: #000000;
        }
        #coin_instructions
        {
            border: 1px solid black;
            padding: 5px 0px 5px 0px;
            margin-left: 18px;
            margin-bottom: 20px;
        }
        #complete_transactions
        {
            border: 1px solid black;
            max-height: 70px;
            /* padding: 1px 0px 1px 0px; */
            /* margin-left: 18px; */
            margin-bottom: 20px;
        }
        .coin_invalid_text
        {
            text-transform: uppercase; 
            font-weight: bold; 
            color: #000000; 
            text-decoration: underline; 
        }
        #coin_message
        {
            background-color: #d3d3d3;
            border: 1px solid black;
            margin-right: 0px;
            margin-left: 18px;
            margin-bottom: 20px;
        }
        .coin_invalid_text
        {
            text-align: center;
            position: relative;
            background-color: #d3d3d3;
            top: 30%;
            bottom: 50%;
        }
        .type_password
        {
            margin-left: 20px; 
            position: relative; 
            top: 15%; 
            text-transform: uppercase;
        }
		.display_type1
		{
			margin: auto; 
            text-align: center;
            text-transform: uppercase;
			margin-top: 5%;
		}
		#box1_bckground
		{
			background-color: grey;
			border: 1px solid black;
            max-height: 250px;
            /* padding: 1px 0px 1px 0px; */
            margin: auto;
			margin-bottom: 20px;
			position: middle;
		}
		.password_bx
		{
			width: 50px;
			height: 50px;
			border: 1px solid black;
			background-color: white;
		}
		.valid_bx
		{
			width: 200px;
			height: 50px;
			border: 1px solid black;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
		}
        #products
        {
            margin-left: auto;
            margin-right: auto;
            text-transform: uppercase;
            text-decoration: underline;
            background-color: #d3d3d3;
            width: 90%;
            text-align: center;
            border-color: #000000;
        }
        .purchase_btn{
            width: 70%;
            margin: 5px 0px 5px 0px;
            padding: 10px 60px 10px 60px;
            border: 1px solid #000000;
            background-color: #d3d3d3;
            border-radius: 20px 20px 20px 20px;
        }
        .coin_btn{
            width: 100px;
            height: 40px;
            max-height: 40px;
            /* height: 30px; */
            /* margin: 5px 0px 5px 0px; */
            /* padding: 5px 70px 5px 70px; */
            border: 1px solid #000000;
            background-color: #d3d3d3;
            border-radius: 20px 20px 20px 20px;
            position: middle;
			margin: auto;
            /* top: 5%; */
        }
        .coin_return{
            /* width: 70%; */
            /* height: 30px; */
            /* margin: 5px 0px 5px 0px; */
            /* padding: 15px 70px 15px 70px; */
            width: 100px;
            height: 50px;
            max-width: 100px;
            max-height: 50px;
            border: 1px solid #000000;
            background-color: #d3d3d3;
            border-radius: 20px 20px 20px 20px;
            position: relative;
            margin-left: -20px;
            /* top: 7%; */
        }
		.drink_return{
            /* width: 70%; */
            /* height: 30px; */
            /* margin: 5px 0px 5px 0px; */
            /* padding: 15px 70px 15px 70px; */
            width: 100px;
            height: 50px;
            max-width: 100px;
            max-height: 50px;
            border: 1px solid #000000;
            background-color: #d3d3d3;
            border-radius: 20px 20px 20px 20px;
            position: relative;
            margin-left: -20px;
            /* top: 7%; */
        }
        .coin_return_selector
        {
            /* border: 1px solid black; */
            padding: 0px 0px 0px 0px;
            /* background-color: #E6E6FA; */
            width: 100px;
            height: 30px;
            position: relative;
            top: 20%;
            left: 17%;
        }
        .coin_selector
        {
            position: relative;
            top: 15%;
            border: 1px solid black;
            background-color: #E6E6FA;
            padding: 2px 30px 2px 30px;
            margin-left: 18px;
        }
        .content_modal{
        }
    </style>
	
	<script>
	// When the user starts to type something inside the password field
		<!-- myInput.onkeyup = function() { -->
			<!-- if(myInput.value.match('AbC123'){ -->
				<!-- $('#valid_bx').css('background-color', 'green'); -->
				<!-- $('#invalid_bx').css('background-color', 'grey'); -->
			<!-- } -->
			<!-- else -->
			<!-- { -->
				<!-- $('#invalid_bx').css('background-color', 'red'); -->
				<!-- $('#valid_bx').css('background-color', 'grey'); -->
			<!-- } -->
		<!-- } -->
       $(document).ready(function(){
        console.log('jquery invoked');
        $("#coin_modal").click(function(e){
            console.log('clicked');
            $('#coinoptions').modal('show');
        })
		
		$('#psw').on('keyup', function(){
			var password = $('#psw').val();
			if(password == 'AbC123')
			{
				$('#valid_bx').css('background-color', 'green'); 
				$('#invalid_bx').css('background-color', 'grey');
			}
			else if(password == '')
			{
				$('#valid_bx').css('background-color', 'grey'); 
				$('#invalid_bx').css('background-color', 'grey');
			}
			else
			{
				$('#valid_bx').css('background-color', 'grey'); 
				$('#invalid_bx').css('background-color', 'red');
			}
		$('#coin_btn1').click(function(e){
			e.preventDefault();
			
		})
	   });
	 
		});
		
    </script>
	<body>
		<div class="container" style="display: flex; justify-content: center;">
            <div class="content">

            <a href="javascript:history.back()" class="title"><span class="glyphicon glyphicon-search" style="display: inline-block" aria-hidden="true"></span>Back</a>
            <h2 class="title">vimto soft drinks dispenser</h2>
			<p class="sub">maintainer control panel</p>
			<div class="row" style="margin-top: 50px;">
				<!-- first col -->
				<div class="col-md-8" id="box1_bckground">
					<div class="row">
						<div class="col-md-6">
						<label for="psw">
							<p class="type_password"><b>type password here</b></p>
						</label>
						</div>
						<div class="col-md-1">
							<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,6}" title="Must contain at least one number and one uppercase and lowercase letter, with 6 characters" maxlength=6 required>
							
						</div>
					<!--	<div class="col-md-1">
							<div class="password_bx">
							</div>
						</div>
						<div class="col-md-1">
							<div class="password_bx">
							</div>
						</div>
						<div class="col-md-1">
							<div class="password_bx">
							</div>
						</div>
						<div class="col-md-1">
							<div class="password_bx">
							</div>
						</div>
						<div class="col-md-1">
							<div class="password_bx">
							</div>
						</div> -->
					</div>
				</div>
				
				<!-- second col -->
				<div class="col-md-8" id="box1_bckground">
					<div class="row">
						<div class="col-md-6">
							<div class="valid_bx" id="valid_bx" style="background-color:grey">
							<div style="margin-left:20px"></div>
								<p class="display_type1"><b>password valid</b></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="valid_bx" id="invalid_bx" style="background-color:grey">
							<div style="margin-right:20px"></div>
								<p class="display_type1"><b>password invalid</b></p>
							</div>
						</div>
					</div>
				</div>
				
				<!-- third col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<p class="display_type1"><b>press below to determine number of coins in selected denomination</b></p>
					</div>
					<div class="row" style="background-color:#E6E6FA">
						<div class="col-md-3">
							<input type="submit" name="request_10cdeno" value = "10C" class="coin_btn">
						</div>
						<div class="col-md-3">
							<input type="submit" name="request_20cdeno" value = "20C" class="coin_btn">
						</div>
						<div class="col-md-3">
							<input type="submit" name="request_50cdeno" value = "50C" class="coin_btn">
						</div>
						<div class="col-md-3">
							<input type="submit" name="request_rm1deno" value = "RM1" class="coin_btn">
						</div>
					</div>
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA">
							<p class="display_type1" style="margin:auto">total number of coins in selected denomination</p>
						</div>
						<div class="col-lg-1"></div>
						<div class="col-md-2" style="margin:middle">
							<p class="coin_return_selector" style="text-align: center;"><?php 
							if(isset($_GET['request_10cdeno'])){ 
							"10 "; 
							}   ?></p>
						</div>
					</div>
				</div>

				<!-- fourth col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<p class="display_type1"><b>press below to determine quantity of drink cans in selected denomination</b></p>
					</div>
					<div class="row" style="background-color:#E6E6FA">
						<div class="col-md-2">
							<div class="coin_btn" id="coin_btn">
								<p class="display_type1">Brand 1</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="coin_btn">
								<p class="display_type1">Brand 2</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="coin_btn">
								<p class="display_type1">Brand 3</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="coin_btn">
								<p class="display_type1">Brand 4</p>
							</div>
						</div>
						<div class="col-md-2">
							<div class="coin_btn">
								<p class="display_type1">Brand 5</p>
							</div>
						</div>
					</div>
					<div class="row" style="border : 1px black">
						<div class="col-md-7" style="background-color:#E6E6FA" style="border : 1px solid">
							<p class="display_type1" style="margin:auto">total quantity of drink cans in selected denomination</p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border : 5px black">
							<drink_return>
							</drink_return>
						</div>
					</div>
				</div>
				
				<!-- fifth col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA" style="left-side border: 1px solid black" id="cash_held_button">
							<p class="display_type1" style="margin:15px"><b>type new drink can price here</b></p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border: 1px solid black">
						</div>
					</div>
				</div>
				
				<!-- sixth col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA" style="left-side border: 1px solid black" id="cash_held_button">
							<p class="display_type1" style="margin:15px"><b>press here for total cash held by machine</b></p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border: 1px solid black">
						</div>
					</div>
				</div>
				
				<!-- seventh col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA" style="left-side border: 1px solid black" id="cash_held_button">
							<p class="display_type1" style="margin:15px"><b>press here to collect all cash</b></p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border: 1px solid black">
						</div>
					</div>
				</div>
				
				<!-- eigth col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA" style="left-side border: 1px solid black" id="cash_held_button">
							<p class="display_type1" style="margin:15px"><b>collect all cash here</b></p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border: 1px solid black">
						</div>
					</div>
				</div>
				
				<!-- ninth col -->
				<div class="col-md-11" id="box1_bckground">
					<div class="row">
						<div class="col-md-7" style="background-color:#E6E6FA" style="left-side border: 1px solid black" id="cash_held_button">
							<p class="display_type1" style="margin:15px"><b>press here when finish</b></p>
						</div>
						<div class="col-md-1" style="margin:auto" style="border: 1px solid black">
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</body>
</html>