<?php
if(isset($_POST['submit']))
{
    // echo "i am clicked";
    $coin_50 = (isset($_POST['50'])) ? 0.5 : null ;
    $coin_20 = (isset($_POST['20'])) ? 0.2 : null;
    $coin_10 = (isset($_POST['10'])) ? 0.1 : null;
    $invalid = (isset($_POST['invalid'])) ? "Coins not valid" : "";
    if(!is_null($coin_50)) { $coin = $coin_50; } 
    if(!is_null($coin_20)) { $coin = $coin_20; } 
    if(!is_null($coin_10)) { $coin = $coin_10; } 
    if(isset($coin)) { total($coin, $temp);}
    $temp = 0.0;
    // print($coin);
    function total($coin, $temp)
    {
        $temp += $coin;
        $total = $temp;
        // $temp = $total;
        print($total);
        return $total; //calculate total
        
    }
    
    // $temp;
   
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- Bootstrap CSS -->
    <!-- <script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <title>Customer Panel</title>
    </head>
        <script>
       $(document).ready(function(){
        console.log('jquery invoked');
        $("#coin_modal").click(function(e){
            console.log('clicked');
            $('#coinoptions').modal('show');
        })

       });
        </script>  
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
                height: 900px;
                max-height: 1000px;
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

            <a href="javascript:history.back()" class="title"><span class="glyphicon glyphicon-search" style="display: inline-block" aria-hidden="true"></span>Back</a>
            <p class="title">vimto soft drinks dispenser</p>
                <div class="row" style="margin-top: 50px;">
                        <!-- first col -->
                        <!-- <div class="row"> -->
                        <div class="col-md-8" id="coin_instructions">
                            <div class="row">
                                <div class="col-md-9">
                                    <p class="insert_coin">insert coin here</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="coin_btn">
                                        <a href="#coinoptions" id="coin_modal" data-target="#coinoptions" class="coin_selector"></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" id="coin_message">
                            <p class="coin_invalid_text">coins not valid</p>
                        </div>   
                        <!-- </div>  -->
                        <!-- second col -->
                        <div class="col-md-8" id="coin_instructions">
                            <p class="insert_coin">total money inserted</p>
                        </div>
                        <div class="col-md-3" id="coin_message">
                            <input type="text" class="coin_invalid_text"  style="width: 50px; margin-top: -10px; border: none; " name="total_money" value="<?php  echo (isset($total)) ?  $total: ''; ?>" readonly>
                        </div>

                        <br>

                        <table id="products" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> select drink below </th>
                                    <th> price </th>
                                    <th> </th>
                                    <th> press to select </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #E6E6FA">
                                <th>brand 1</th>
                                <th>80</th>
                                <th style="text-transform: uppercase; text-decoration: underline;">not available</th>
                                <th><a class="purchase_btn"></a></th>

                                </tr>

                                <tr style="background-color: #E6E6FA">
                                <th>brand 1</th>
                                <th>80</th>
                                <th style="text-transform: uppercase; text-decoration: underline;">not available</th>
                                <th><a class="purchase_btn"></a></th>

                                </tr>

                                <tr style="background-color: #E6E6FA">
                                <th>brand 1</th>
                                <th>80</th>
                                <th style="text-transform: uppercase; text-decoration: underline;">not available</th>
                                <th><a class="purchase_btn"></a></th>

                                </tr>

                                <tr style="background-color: #E6E6FA"> 
                                <th>brand 1</th>
                                <th>80</th>
                                <th style="text-transform: uppercase; text-decoration: underline;">not available</th>
                                <th><a class="purchase_btn"></a></th>

                                </tr>

                                <tr style="background-color: #E6E6FA">
                                <th>brand 1</th>
                                <th>80</th>
                                <th style="text-transform: uppercase; text-decoration: underline;">not available</th>
                                <th><a class="purchase_btn"></a></th>

                                </tr>
                            </tbody>
                        </table>
                </div>
                <br>
                <div class="row">
                        <!-- <div class="row"> -->
                            <div class="col-lg-2"></div>

                            <div class="col-lg-8" id="coin_message">
                                <p class="coin_invalid_text">no change available</p></div>
                            <div class="col-lg-2"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" id="complete_transactions">
                        <div class="row">
                            <div class="col-lg-9">
                                <p class="insert_coin">press here to return cash and <br>terminate transaction here</p>
                            </div>
                            <div class="col-lg-1">
                            <div class="coin_return" style="top: 10%;">
                                        <p class="coin_return_selector" ></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" id="complete_transactions">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="insert_coin" style="top: 25%;">collect change/returned cash here</p>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-1">
                                <div class="coin_return">
                                    <p class="coin_return_selector"></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-lg-1"></div>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-5" id="complete_transactions">
                                <p class="insert_coin" style="top: 35%;">collect can here</p>
                            </div>
                            <div class="col-lg-7">
                                <div id="coin_message" style="height: 100px; max-height: 100px; max-width: 350px; width: 350px;">
                                    <div class="coin_return_selector" style="width: 250px; height: 70px; margin-top: -5px;"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
          
        
      <!-- Modal -->
      <div class="modal fade coinoptions" id="coinoptions" tabindex="-1" role="dialog" aria-labelledby="coinoptions" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Select your coin</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="index.php?submit">
                                                <div class="modal-body">
                                                    <div class="content-modal" style="text-align: center;">
                                                        <br>
                                                    <button type="button" class="btn btn-primary btn-lg" value="50" name="50">50</button>
                                                            
                                                            <br>
                                                            <br>

                                                    <button type="button" class="btn btn-dark btn-lg" value="20" name="20">20</button>
                                                            
                                                    <br>
                                                            <br>
                                                    <button type="button" class="btn btn-success btn-lg" value="10" name="10">10</button>
                                                        
                                                    <br>
                                                        <br>
                                                        <button type="button" class="btn btn-danger btn-lg" value="invalid" name="invalid">invalid</button>
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                                                    <input type="submit" name="submit" class="btn btn-primary">
                                                </div>
                                                </form> 

                                                </div>
                                            </div>
                                            </div>
    </body>
</html>



                       



                       



                       