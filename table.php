<?php 
session_start();
if(isset($_SESSION['myValue1'])){
$con = mysqli_connect("localhost","id905513_bhanu","bhanu12345","id905513_acumen");
$sql="SELECT * FROM student";
 $get=mysqli_query($con,$sql);
$num=mysqli_num_rows($get);
while($row=mysqli_fetch_array($get))
{
$id[]=$row['id'];
$name[]=$row['name'];
$mobile[]=$row['mobile'];
$email[]=$row['email'];
$event[]=$row['event'];
$rid[]=$row['rid'];}
}

else {
header('Location: adminlogin.php');}
?>
<html><head></head><style>
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
}</style><body>
<table style="width:75%;">
<tr><th>S.no</th><th>Name</th><th>Mobile</th><th>E-mail</th><th>Register ID</th><th colspan="2">Event</th></tr>
<?php   for($i=0;$i<$num;$i++){  ?>
<tr><td><?php echo ($i+1); ?></td><td><?php echo $name[$i]; ?></td><td><?php echo $mobile[$i]; ?></td><td><?php echo $email[$i]; ?></td><td><?php echo $rid[$i]; ?></td><td><?php echo $event[$i]; ?></td><td><input type="checkbox"></td></tr>
<?php } ?>

</table><br><br><br>
<input id="printpagebutton" type="button" value="Print this page" onclick="printpage()"/>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

</body></head>/<html>