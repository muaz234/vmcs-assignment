
<?php
include('../Drinks/Drink.php');
include('./Transaction.php');

?>
<html>
<head>  
     <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<!-- Bootstrap CSS -->
	<!-- <script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script> -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>Customer Panel</title>
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
.content
{
    margin-top:30px;
    /* height: 900px; */
    /* max-height: 1000px; */
    /* max-width: 800px; */
    width: 700px;
    background-color: #E6E6FA;
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
.insert_coin
{
    margin-left: 20px; 
    position: relative; 
    top: 15%; 
    text-transform: uppercase;
}
#products
{
    margin-left: auto;
    margin-right: auto;
    text-transform: uppercase;
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
    position: relative;
    /* top: 5%; */
}
.coin_return{
    /* width: 70%; */
    /* height: 30px; */
    /* margin: 5px 0px 5px 0px; */
    /* padding: 15px 70px 15px 70px; */
    width: 150px;
    height: 50px;
    max-width: 150px;
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
    border: 1px solid black;
    padding: 0px 0px 0px 0px;
    background-color: #E6E6FA;
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
	<body>
		<div class="container" style="display: flex; justify-content: center;">
			<div class="content">
				<a href="../index.php" class="title"><span class="glyphicon glyphicon-search" style="display: inline-block" aria-hidden="true"></span>Back</a>
				<p class="title">MACHINERY SIMULATION CONTROL PANEL</p>
				<div class="row" style="margin-top: 50px;">
				<table id="products" class="table table-bordered">
					<thead>
						<tr>
							<th style="background-color: #E6E6FA;"> </th>
							<th>Display / Enter New Value</th>
							
						</tr>
					</thead>
					<tbody>
						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF CANS BRAND 1</th>
						<th><input value = "10" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF CANS BRAND 2</th>
						<th><input value = "10" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF CANS BRAND 3</th>
						<th><input value = "10" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF CANS BRAND 4</th>
						<th><input value = "10" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF CANS BRAND 5</th>
						<th><input value = "10" type="number" min="0" max="20"class="form-control"></th>

						</tr>
					</tbody>   
				</table>
				</div>

				<div class="row" style="margin-top: 50px;">
				<table id="products" class="table table-bordered">
					<thead>
						<tr>
							<th style="background-color: #E6E6FA;"> </th>
							<th>Display / Enter New Value</th>
							
						</tr>
					</thead>
					<tbody>
						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF 10c Coins</th>
						<th><input value = "20" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF 20c Coins</th>
						<th><input value = "20" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF 30c Coins</th>
						<th><input value = "20" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF 50c Coins</th>
						<th><input value = "20" type="number" min="0" max="20"class="form-control"></th>

						</tr>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">NUMBER OF 1 RM</th>
						<th><input value = "20" type="number" min="0" max="20"class="form-control"></th>

						</tr>
					</tbody>   
				</table>
				</div>

				<div class="row" style="margin-top: 50px;">
				<table id="products" class="table table-bordered">
					
					<tbody>

						<tr style="background-color: #E6E6FA">
						
						<th style="width: 400px;  text-transform: uppercase;">Status of vending machine</th>
						<th><button id="lock" class="btn btn-danger">LOCKED</button></th>
						<th><button id="unlock" class="btn btn-secondary">UNLOCKED</button></th>

						</tr>
					</tbody>   
				</table>
				</div>


			</div>
	
	</body>
	<script>

	$('input[type=number]').on('keyup', function() { 
		var inputValue = parseInt($(this).val())
		console.log(typeof(inputValue))

		if (inputValue > 20 || inputValue < 0) {
			$(this).val(20)
			alert('Invalid Input')
		}
	 });

	 $('#unlock').on('click', function() {
		 $(this).addClass('btn-success')
		 $(this).removeClass('btn-secondary')
		 $('#lock').addClass('btn-secondary')
		 $('#lock').removeClass('btn-danger')
	 })

	 $('#lock').on('click', function() {
		 $(this).addClass('btn-danger')
		 $(this).removeClass('btn-secondary')
		 $('#unlock').addClass('btn-secondary')
		 $('#unlock').removeClass('btn-success')
	 })

	 


	</script>
</html>