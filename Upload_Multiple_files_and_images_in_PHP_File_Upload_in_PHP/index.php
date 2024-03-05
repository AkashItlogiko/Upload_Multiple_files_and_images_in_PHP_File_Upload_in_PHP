<?php
if(isset($_POST['submit'])){

  $total = count($_FILES ['file']['name']);

for($x=0;$x<$total;$x++){
 $filename = $_FILES ['file']['name'][$x]; 
  $tempname = $_FILES ['file']['tmp_name'][$x];
  $upload='images/'. $filename;

 move_uploaded_file($tempname ,$upload);

}

}


?>

<form action="index.php" method="POST"  enctype="multipart/form-data">

Select File <br><br>
<input type="file" name="file[]" multiple><br><br>
<input type="submit" name="submit" value="Upload" >

</form>