<?
$username = $_post['username'];
$password = $_post['password'];
$email = $_post['email'];
  
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
die('connection faild   :'.$conn->connect_error);
  }
else{
$stmt = $conn->prepare("insert into registration(username, password ,email)
$stmt->bind_param(" sss",$username,$password,$email);
$stmt->execute();
echo "registration successfull...."
$stmt->close();
$conn->close();
}
?>
