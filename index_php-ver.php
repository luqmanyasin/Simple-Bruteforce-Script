<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS & JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <style>
    body { text-align:center; } 
    form { transition: .2s; }
    .float-top {position:fixed;top:10px;left:20px;}
    .float-top.rght {position:fixed;top:10px;right:-700px;width: 40%;}
    .top-1 {top:100px;}
    .top-2 {top:200px;}
    .top-3 {top:300px;}
    .top-4 {top:400px;}
    .top-5 {top:500px;}
    .top-6 {top:600px;}
    .top-7 {top:700px;}
    .top-8 {top:800px;}
    .top-9 {top:900px;}
    .top-10 {top:1000px;}
    .top-11 {top:1100px;}
    .top-12 {top:1200px;}
    .top-13 {top:1300px;}
    .top-14 {top:1400px;}
    .top-15 {top:1500px;}
    .top-16 {top:1600px;}
    .top-17 {top:1700px;}
    .top-18 {top:1800px;}
    .top-19 {top:1900px;}
    .top-20 {top:2000px;}
   </style>


</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="offset-by-three one-half column" style="margin-top: 50px;">
<?php
require_once "class/class.init.php";
if(strlen($_GET['values']) > 1 && isset($_GET['m']) && isset($_GET['a']) && isset($_GET['n'])): // Check if the get requests are set.
  //$_GET['values'] = preg_replace('*%2C*','*,*', $_GET['values']);
  $method = $_GET[m]; // Assign the get request to a variable
  $action = $_GET[a]; // Assign the get request to a variable
  $name = $_GET[n]; // Assign the get request to a variable
  $init = new init($_GET['values']);
  $results = $init->getComb();  // Run the funtion getComb using the input values to results
  $count = ((count(str_split($_GET['values']))+1)/2);
  if($count >= 6):
    print "This Script currently only supports upto 5 characters.";
    exit;
  endif;
?>
<div class="countcont">Successfully submitted: <span class="count">0</span> | Possible Successes: <span class="scount">0</span> </div>
<a href="" class="suball">Submit All</a>
<?
  $k=1;
  foreach($results[0] as $input): // Loop all results from the getComp function.
?>
        <form style="margin:50px auto">
          <input type="text" value="<?=$input?>" class="value" name="<?=$name?>" disabled/>
          <input type="submit" value="Submit" class="sub" /><input type="hidden" value="<?=$k?>" /><br /> <span class="stuff">Not Submitted</span>
        </form>
<?
    $k++;
  endforeach; ?>
        <script>
  var successArr 	= ['success', 'logged in', 'successful', 'welcome', 'hello', 'successfully', 'redirecting', 'please wait']; // Array of keywords that could be interpreted as successful
  var named 		= '<?=$name?>';
  var method 		= '<?=$method?>';
  var action 		= '<?=$action?>';
        </script>
        <script src="js/submit.js"></script>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

  <?php
  exit;
endif;

?>
        <form action="" style="margin:50px auto" method="GET">
          <input type="text" name="m" placeholder="Form Method" class="u-full-width" /><br />
          <input type="text" name="n" placeholder="Input name" class="u-full-width" /><br />
          <input type="text" name="a" placeholder="Action URL" class="u-full-width" /><br />
          <textarea  name="values" placeholder="Enter Values - Seperate each character with a ',' comma." class="u-full-width" ></textarea><br />
          <input type="submit"  class="u-full-width"/>
        </form>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>