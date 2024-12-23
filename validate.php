<?php
 
include_once('config.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from users where username='$username'"; 
    $result = mysqli_query($conn, $sql); 
    $num = mysqli_num_rows($result);  
    // $stmt = $conn->prepare("SELECT * FROM users");
    // $stmt->execute();
    // $users = $stmt->fetchAll();
    // print_r($username);
    // print_r($password);
    // print_r(password_hash($password, PASSWORD_DEFAULT));
    if($num == 0) { 
        $showError = "Sai thong tin";     
    }// end if  
    
   if($num>0)  
   { 
      $exists="Username not available";  
   }  

    // $sql = 'SELECT * FROM users';
    // $stmt = $conn->prepare($sql);
    // $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    // $stmt->execute();

    // $users = $stmt->fetch(PDO::FETCH_ASSOC);
    // if ($users && password_hash($password, PASSWORD_DEFAULT)==$users['password']){
    //     $_SESSION['username'] = $user['username'];
    //     $_SESSION['role'] = $user['role'];

    //     if ($_SESSION['role'] == 'admin') {
    //         header("Location: admin.php");
    //     } else {
    //         header("Location: home.php");
    //     }
    //     exit;

     
    foreach($users as $user) {
         
        if(($user['username'] == $username) && 
            ($user['password'] == password_hash($password, PASSWORD_DEFAULT))) {
                if ($user['role'] != 'admin'){
                    header("location: home.php");
                }
                else{
                    header("location: admin.php");
                }
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
 
?>