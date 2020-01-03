<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <!-- <script   src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="   crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #simulator-panel {
            margin-top: 30px;
            width: 100%;
            border: 2px solid black;
            width: 700px;
            height: 600px;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 30px;
            background-color: #E6E6FA;
            
        }
        .col-md-9{
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 20px;
            border: 1px solid black;
            padding: 15px 0px 15px 20px;
            -webkit-box-shadow: 15px 8px 1px rgb(65,105,225);
            -moz-box-shadow: 15px 8px 1px rgb(65,105,225);
            box-shadow: 18px 15px 1px rgb(65,105,225);
            /* border-radius: 0px 50px 50px 0px; */
            white-space: nowrap;
            font-size: 10pt;
            position: relative;
            padding-left: 20px;
        }
        
        .col-md-3
        {
            text-transform: uppercase;
            border: 1px solid black;
            font-weight: bold;
            margin-bottom: 20px;
            background-color: #E6E6FA;
            padding: 15px 0px 15px 10px;
            font-size: 10pt;
            position: relative;
            white-space: nowrap;
            border-radius: 40px 40px 40px 40px;
            margin-left: -20px;
            text-align: center;
        }
        a{
            color: #000000;
        }
    </style>
    <script>
        $(document).ready(function() {
            var customer_panel = $('#customer_panel').attr("href");
            var maintainer_panel = $('#maintainer_panel').attr("href");
            var simulator_panel = $('#simulator_panel').attr("href");

            $("#customer_panel").removeAttr('href');
            $('#maintainer_panel').removeAttr('href');
            $("#simulator_panel").removeAttr('href');
        $('#begin').on('click',function(e){
            e.preventDefault();
            // console.log('begin is clicked');
            $('#begin').hide();
            $('#customer_panel').attr("href", customer_panel);
            $('#maintainer_panel').attr("href", maintainer_panel);
            $('#simulator_panel').attr("href", simulator_panel);

        });

        $('#end').on('click', function(e) {
            e.preventDefault();
            // console.log('end is clicked');
            $('#begin').show();
            // $('#begin').show();
           
        });

        });
        
    </script>

    <title>VMCS</title>
  </head>
  <body class="container" style="display: flex; justify-content: center;">
      <div class="simulator-panel d-flex justify-content-center" id="simulator-panel">
          <div class="content">
              <h1 style="margin-top: 20px;">Simulator Control Panel</h1>
                <br/>
                <br/>
                <br/>

                <div class="row" id="start-simulation">
                    <div class="col-md-9">
                        begin simulation
                    </div>

                    <div class="col-md-3">
                        <!-- <button type="btn" value="press" style="outline: none;" name="press" id="btn">press</button>  -->
                        <a id="begin" href="">press</a>
                    </div>
                <br/>
                </div>

                <div class="row" id="end-simulation">
                    <div class="col-md-9">
                        end simulation
                    </div>

                    <div class="col-md-3" >
                        <a id="end" href="">press</a>
                    </div>
                <br/>
                </div>

                <div class="row" id="customer-simulation">
                    <div class="col-md-9">
                        activated customer panel
                    </div>

                    <div class="col-md-3" >
                        <a href="Transaction/index.php" id="customer_panel">press</a>
                    </div>
                <br/>
                </div>

                <div class="row" id="maintainer-simulation">
                    <div class="col-md-9">
                        activated maintainer panel
                    </div>

                    <div class="col-md-3"  >
                        <a href="" id="maintainer_panel">press</a>
                    </div>
                </div>

                <div class="row" id="machinery-simulation">
                    <div class="col-md-9">
                        activate machinery simulator panel
                    </div>

                    <div class="col-md-3" >
                        <a href="Simulator/index.php" style="margin: auto 0;" id="simulator_panel">press</div> 
                    </div>
                <br/>
                </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>