<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!---************* arrangement by john niro yumang b4.0 alpha project graduation ******************* -->
<!DOCTYPE html>
<html lang="en">
   <title>404</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style type="text/css">
         body {
         background-image: url('{{ asset('/theme/assets/images/banner/bnr1.jpg') }}');
         background-color:white;
         background-attachment:scroll;
         background-repeat:no-repeat;
         background-position:center;
         background-size:cover;
         line-height:5px; 
         }
         .display-1 {text-align:center;color:#e1b7b7;}
         .display-1 .fa {animation:fa-spin 5s infinite linear;}
         .display-3 {text-align:center;color:#df726a;}
         .lower-case {text-align:center;}
      </style>
   </head>
   <!-------------end head scripts and link src ------------->
   <!------------start content ------------>
   <body>
      <div class="wrapper">
         <div class="container-fluid" id="top-container-fluid-nav">
            <div class="container">
               <!---- for nav container -----> 
            </div>
         </div>
         <div class="container-fluid" id="body-container-fluid">
            <div class="container">
               <!---- for body container ---->
               <div class="jumbotron mt-5">
                  <h1 class="display-1">4&nbsp;<i class="fa  fa-spin fa-cog fa-1x"></i>&nbsp;4</h1>
                  <h1 class="display-3">Page Not Found</h1>
                  <p class="lower-case">{{ $message }}</p>
               </div>
               <!-------mother container middle class------------------->
            </div>
         </div>
         <div class="container-fluid" id="footer-container-fluid">
            <div class="container">
               <!---- for footer container ---->
            </div>
         </div>
      </div>
   </body>
</html>