<?php
class userModel extends db{
   public function login(){

    if (isset($_SESSION['username'])) {
        header("Location: homepage.php");
    }
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = ($_POST['password']);
    
        $sql = "SELECT * FROM tbl_user WHERE Email='$email' AND PasswordHash='$password'";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['Name'];
            header("Location: homepage.php");
        } else {
            echo "<script>alert('Email or Password is Wrong.')</script>";
        }
    }
   
   
   
}
    public function register(){
        if (isset($_SESSION['username'])) {
            header("Location: homepage.php");
        }
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = ($_POST['password']);
            $repassword = ($_POST['repassword']);
        
            if ($password == $repassword) {
                $sql = "SELECT * FROM tbl_user WHERE email='$email'";
                $result = mysqli_query($this->con, $sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO tbl_user (`Name`, email, PasswordHash)
                            VALUES ('$username', '$email', '$password')";
                    $result = mysqli_query($this->con, $sql);
                    if ($result) {
                        echo "<script>alert('Wow! User Registration Completed.')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['repassword'] = "";
                    } else {
                        echo "<script>alert('Woops! Something Wrong Went.')</script>";
                    }
                } else {
                    echo "<script>alert('Woops! Email Already Exists.')</script>";
                }
                
            } else {
                echo "<script>alert('Password Not Matched.')</script>";
            }
        }
        
      
    }

}
?>