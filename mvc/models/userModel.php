<?php
class userModel extends db{
   public function login(){
    if (isset($_SESSION['username'])) {
        header("Location: homeview.php");
    }
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = ($_POST['password']);
    
        $sql = "SELECT * FROM tbl_user WHERE Email='$email' AND PasswordHash='$password'";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['Name'];
            $_SESSION['Id']=$row['Id'];
            header("Location: homepage.php");
        } else {
            echo "<script>alert('Email or Password is Wrong.')</script>";
        }
    }
   
   
   
}
    public function register(){ 
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $username = $_POST['name'];
            $password = ($_POST['password']);
            $repassword = ($_POST['repassword']);
        
            if ($password == $repassword) {
                $sql = "SELECT * FROM tbl_user WHERE Email='$email'";
                $result = mysqli_query($this->con, $sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO tbl_user (`Name`, Email, PasswordHash)
                            VALUES ('$username', '$email', '$password')";
                    $result = mysqli_query($this->con, $sql);
                    if ($result) {
                        echo "<script>alert('Dang Ky Thanh Cong.')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['repassword'] = "";
                       
                    } else {
                        echo "<script>alert('Dang ky that bai.')</script>";
                    }
                } else {
                    echo "<script>alert('Email Already Exists.')</script>";
                }
                
            } else {
                echo "<script>alert('Password Not Matched.')</script>";
            }
        }
        
      
    }
    public function logout(){
      
        session_destroy();
        header("Location:BASE_URL/home");
        
    }

    public function GetFeedBack($id){
        $qr = "SELECT * FROM tbl_feedbacks WHERE ShopId=".$id."";
        $querry= mysqli_query($this->con,$qr);
        $result =array();
        $sumR=0;
        $z=0;
        $x=0;
        $c=0;
        $v=0;
        $b=0;
        while($rows=mysqli_fetch_array($querry))
        {
            array_push($result,$rows);
            $sumR+=$rows['Rating'];
            switch($rows['Rating']){
                case 5: {
                    $z++;
                    break;
                }
                case 4: {
                    $x++;
                    break;
                }
                case 3:{
                    $c ++;
                    break;
                }
                case 2:{
                    $v++;
                }
                case 1:{
                    $b++;
                }
                default: {
                    break;
                }
            }
        }
        $ts= round($sumR / count($result),1);
        $result['AverageRating']=$ts;
        $result['QuantityRating']=$z+$x+$c+$v+$b;
        $result['FiveStarRating']=$z;
        $result['FourStarRating']=$x;
        $result['ThreeStarRating']=$c;
        $result['TwoStarRating']=$v;
        $result['OneStarRating']=$b;
        return $result;
    }
   
}
?>