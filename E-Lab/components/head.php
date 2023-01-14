<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
.container {
  display: flex;
  justify-content:space-around; /* this will distribute the elements evenly across the div */
  height:80px;
  padding-top:20px;
}

/* .left,
.center,
.right {
  flex: 1; /* this will make the elements take up equal amounts of space */
} */

@media (max-width: 600px) { /* adjust this value to your desired breakpoint */
  .container {
    flex-wrap: nowrap; /* this will make the elements stay on the same line */
  }
}


</style>
    
</head>
<body>
<div class="container">
  <div class="left"> <h2 style="font-size:20px;">island wide delivery</h2></div>
  <div class="center"><h2 style="font-size:20px;">Shop Now</h2></div>
  <div class="right"><i class="fa fa-truck" style="font-size:20px;"></i></div>
</div>



</body>
</html>
