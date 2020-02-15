<?php 
$conn=mysqli_connect('localhost','root','','javatpoint');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['username'])){
    
    $name=$_POST['username'];
    $pass=$_POST['password'];
  
    $sql="select * from usertable where username='".$name."' limit 1";
    
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)==1){
                    echo '<script language="javascript">';
        			echo 'alert("same username already exists")';
        			echo '</script>';  
        			echo '<Script language="javascript">';
			        echo 'window.location = "signup.html" ';
			        echo '</script>';
                    
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("registration sucessfull")';
        echo '</script>';
        $reg="insert into login(username,password) values('$name','$pass')";
        mysqli_query($conn,$reg);
        echo '<Script language="javascript">';
        echo 'window.location = "index.html" ';
        echo '</script>';
      
        exit();
    }
        
}
?>
