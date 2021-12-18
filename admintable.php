<?php
$con = mysqli_connect("mysql.hostinger.in","u644468346_saanv","7799037833","u644468346_bot");
$getaq=mysqli_query($con,"SELECT * FROM register where status='0'");
$getbq=mysqli_query($con,"SELECT * FROM register where status=1");
$getcq=mysqli_query($con,"SELECT * FROM register where status=2");
$numa=0;$numb=0;$numc=0;
   $numa=mysqli_num_rows($getaq);
   $numb=mysqli_num_rows($getbq);
   $numc=mysqli_num_rows($getcq);
   while($rowa=mysqli_fetch_array($getaq))
{
$ida[]=$rowa['id'];
$usernamea[]=$rowa['username'];
$ffileida[]=$rowa['fileid'];
$timea[]=$rowa['time'];
$transida[]=$rowa['transid'];}
while($rowb=mysqli_fetch_array($getbq))
{
$idb[]=$rowb['id'];
$usernameb[]=$rowb['username'];
$ffileidb[]=$rowb['fileid'];
$timeb[]=$rowb['time'];
$transidb[]=$rowb['transid'];}
while($rowc=mysqli_fetch_array($getcq))
{
$idc[]=$rowc['id'];
$usernamec[]=$rowc['username'];
$ffileidc[]=$rowc['fileid'];
$timec[]=$rowc['time'];
$transidc[]=$rowc['transid'];}
?><html><style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}</style>
<body><button  onclick="myFunction('tablea','tableb','tablec');">newly registered</button>
<button>delivery...</button>
<button>completed</button>
<table style="width:75%;" id="tablea" name="tablea">
<tr><th>S.no</th><th>E-mail</th><th>Dress</th><th>Transid</th><th colspan="2">Proceed to delivery?</th></tr>
<?php   for($i=0;$i<$numa;$i++){  ?>
<tr><td><?php echo ($i+1); ?></td><td><?php echo $usernamea[$i]; ?></td><td><img src="<?php echo $ffileida[$i]; ?>" width=50;height=50;/></td><td><?php echo $transida[$i]; ?></td><td><input type="checkbox"></td></tr>
<?php } ?>

</table>

<table style="width:75%;display:none;" id="tableb"name="tableb">
<tr><th>S.no</th><th>E-mail</th><th>Dress</th><th>Transid</th><th colspan="2">Delivered?</th></tr>
<?php   for($i=0;$i<$numb;$i++){  ?>
<tr><td><?php echo ($i+1); ?></td><td><?php echo $usernameb[$i]; ?></td><td><img src="<?php echo $ffileidb[$i]; ?>" width=50;height=50;/></td><td><?php echo $transidb[$i]; ?></td><td><input type="checkbox"></td></tr>
<?php } ?>

</table>
<table style="width:75%; display:none;" id="tablec" name="tablec">
<tr><th>S.no</th><th>E-mail</th><th>Dress</th><th>Transid</th><th colspan="2">Event</th></tr>
<?php   for($i=0;$i<$numc;$i++){  ?>
<tr><td><?php echo ($i+1); ?></td><td><?php echo $usernamec[$i]; ?></td><td><img src="<?php echo $ffileidc[$i]; ?>" width=50;height=50;/></td><td><?php echo $transidc[$i]; ?></td><td><input type="checkbox"></td></tr>
<?php } ?>

</table>
<script> function myFunction(parameter1,parameter2,parameter3) {
    var x = document.getElementById(parameter1);
		var y = document.getElementById(parameter2);
		var z = document.getElementById(parameter3);
	
   
        x.style.display = 'inline';
        y.style.display = 'none';
				 z.style.display = 'none';
    
}</script>
</body></html>