<?php
$conn= mysqli_connect("localhost","root","","feedback");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phonenumber=$_POST['phonenumber'];
$address=$_POST['address'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];
$query="insert into feedback_table(name,phonenumber,address,email,feedback)
values('$name','$phonenumber','$address','$email','$feedback')";
$run=mysqli_query($conn,$query);
if($run){
echo "Feedback posted";
}
else{
echo "Error:" .mysqli_error($conn);
}
}
?>
