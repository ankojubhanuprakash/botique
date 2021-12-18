<?php
$con = mysqli_connect("localhost","root","","botique");
$itemsrc=$_GET['abc'];
$menusrc=$_GET['def'];
 $get=mysqli_query($con,"SELECT * FROM file WHERE dest='$itemsrc'   ");
  $get2= mysqli_fetch_assoc($get);
  $itm=$get2['dest'];
  $itdn=$get2['dname'];
  $itdc=$get2['cost'];
  $numrows=0;
  $nget=mysqli_query($con,"SELECT * FROM file WHERE dir='$menusrc'AND  dest<>'$itemsrc'   ");
   $numrows=mysqli_num_rows($nget);
   while($row = mysqli_fetch_array($nget)) {
    $fname[] = $row['filename'];  
	$src[]=$row['dest'];
	//$delid[]=$row['id'];
    $name[]=$row['dname'];
	$cost[]=$row['cost'];
	
				}
?><html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no ">
<title>SaanviVarna-Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script type="text/javascript">var currLang = '';</script>
	<style>
	.selectimg{
		height:500px;
	}
	body{
		margin:0;
		overflow:none;
	}

.navdiv{
	background-color:#77d3c4;
	width:100%;
	height:40px;
}
p{
	min-height:24px; position:absolute; margin-top:10px; color:#ffffff; font-size:15px; margin-left:245px; 
}

#wb_element_instance2 { left: 70px; top: 10px; min-width: 200px; width: 200px; min-height: 24px; height: 24px; display: block; z-index: 463; }
@media only screen 
  and (min-device-width: 768px) 
  and (max-device-width: 1024px)  
  and (-webkit-min-device-pixel-ratio: 1) {
	 

}
@media only screen 
  and (min-device-width: 320px) 
  and (max-device-width: 480px)
  and (-webkit-min-device-pixel-ratio: 2)
  and (orientation: portrait) {
	  
	 
	  p{
		  margin-left:10px;
	  }
}
	</style>
		<script>
		$(document).ready(function(){
		
			
			$(".panel-body #addmodify").click(function(){
				$("#panelbdy").animate({
					height:'200px'
			});
				$(this).css("display","none");
				$('html,body').animate({scrollTop: 600});
		});
			
		});
		</script>
	</head>
	<body>
	<div class="navdiv" style="position:relative;">
	<a href="http://mrinalini.esy.es/"><p >Saanvi Varna</p></a>
	</div>
	
	<div class="selectimg">
	<img class="col-sm-3 col-xs-offset-2" src="<?php echo $itm ;?>" width="300px" height="300px" style="margin-top:40px;"/>
	<h3 class="col-sm-3 col-xs-offset-2" style="margin-top:60px;"><?php echo $itdn ;?></h3><br>
	<h3 class="col-sm-3 col-xs-offset-2" style="margin-top:60px;">&#8377;<?php echo $itdc;?></h3><br>
	<button type="submit"class="col-sm-1 col-xs-offset-2 btn btn-success" style="margin-top:80px;">Ordernow</button><br>
	</div><br>
	<div class="container">
	<?php for($i=0;$i<$numrows;$i++) {?>
    <div class="col-xs-3" style="float:left;" >
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="<?php echo($src[$i]);?>" alt="leaves" style="width:100%;">
		  </a>
          <div class="caption">
            <h5 style="text-align:center;"><strong><?php echo($name[$i]);?></strong></h5>
			<h5 style="text-align:center;"><strong>&#8377;<?php echo ($cost[$i]);?></strong></h5>
			<a href="item.php?abc=<?php echo ($src[$i]);  ?>&def=<?php echo $menusrc;  ?>"><button class="btn btn-success btn-block">Buy now</button></a>
          </div>
        </a>
      </div>
	  </div> <?php } ?>
	  
	</div>
	</body>
	</html>