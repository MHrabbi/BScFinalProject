<TABLE  id="table">
  <TR>
    <TH>ID</TH>
    <TH>Date</TH>
    <TH>Time</TH>
    <TH>Image</TH>
  </TR>
<?php 
//Connect to database
require('connectDB.php');


$sql ="SELECT * FROM Detections";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)
{
  while ($row = mysqli_fetch_assoc($result))
    {
?>
   <TR>
      <TD><?php echo $row['id']?></TD>
      <TD><?php echo $row['Date']?></TD>
      <TD><?php echo $row['Time']?></TD>
      <TD><a href="image/<?php echo $row['id']?>.jpg" target="_blank" title="Click">Click to view</a></TD>
   </TR>
<?php   
    }
}
?>
</TABLE>