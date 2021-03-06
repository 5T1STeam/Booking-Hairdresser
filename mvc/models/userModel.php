<?php
class userModel extends db
{
    public function login()
    {
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
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Password'] = md5($row['PasswordHash']);
                header("Location: homepage.php");
            } else {
                echo "<script>alert('Email or Password is Wrong.')</script>";
            }
        }
    }
    public function register()
    {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $username = $_POST['name'];
            $password = ($_POST['password']);
            $repassword = ($_POST['repassword']);
            $role = 1;
        
            if ($password == $repassword) {
                $sql = "SELECT * FROM tbl_user WHERE Email='$email'";
                $result = mysqli_query($this->con, $sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO tbl_user (`Name`, Email, PasswordHash, RoleId) 
                    VALUES ('$username', '$email', '$password', '$role')";
                    $result = mysqli_query($this->con, $sql);
                    if ($result) {
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['repassword'] = "";
                        header("Location: " . BASE_URL . "/login&kq=done");
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
    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/login");
    }

    public function GetFeedBack($id)
    {
        $qr = "SELECT * FROM tbl_feedbacks WHERE ShopId=" . $id . "";
        $querry = mysqli_query($this->con, $qr);
        $result = array();
        $sumR = 0;
        $z = 0;
        $x = 0;
        $c = 0;
        $v = 0;
        $b = 0;
        while ($rows = mysqli_fetch_array($querry)) {
            array_push($result, $rows);
            $sumR += $rows['Rating'];
            switch ($rows['Rating']) {
                case 5: {
                        $z++;
                        break;
                    }
                case 4: {
                        $x++;
                        break;
                    }
                case 3: {
                        $c++;
                        break;
                    }
                case 2: {
                        $v++;
                    }
                case 1: {
                        $b++;
                    }
                default: {
                        break;
                    }
            }
        }
        $ts = round($sumR / count($result), 1);
        $result['AverageRating'] = $ts;
        $result['QuantityRating'] = $z + $x + $c + $v + $b;
        $result['FiveStarRating'] = $z;
        $result['FourStarRating'] = $x;
        $result['ThreeStarRating'] = $c;
        $result['TwoStarRating'] = $v;
        $result['OneStarRating'] = $b;
        return $result;
    }
    public function updateInfo($id)
    {
        if (isset($_POST['nameUser'])) {
            $userName = $_POST['nameUser'];
            $phoneUser = $_POST['phoneNumber'];
            $email = $_POST['Emails'];
            $dateUser = $_POST['dateBirth'];
            $passwordUser = $_POST['passwordUser'];
            $password = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $repassword = $_POST['newPassConfirm'];
            $location = $_POST['Location'];
            if ($passwordUser == $password && $newPass == $repassword) {
                $qr = "UPDATE tbl_user SET `Name` ='$userName',`FullAdress`='$location',`PhoneNumber`='$phoneUser',`Email`='$email',`Birthday` ='$dateUser',PasswordHash='$newPass' WHERE Id=$id";
                $result = mysqli_query($this->con, $qr);
            } elseif ($password=='' && $newPass==''&& $repassword=='') {
                $qr = "UPDATE tbl_user SET `Name` ='$userName',`FullAdress`='$location',`PhoneNumber`='$phoneUser',`Email`='$email',`Birthday` ='$dateUser' WHERE Id= $id ";
                $result = mysqli_query($this->con, $qr);
               
            } else{
                $result= false;
            }
            if ($result) {
                echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:	#00FF00; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> C???p nh???t th??nh c??ng</h2>
                        </div>  
                    </div>
                </div>
                ";
            } else {
                echo "<div id='kqBook' class='modal fade'>
                    <div class='modal-dialog modal-dialog-centered'>
                        <div style='background:#ff0000; border-radius: 30px; padding: 50px; '>
                            <h2 style='text-align: center; color: #fff'> C???p nh???t kh??ng th??nh c??ng</h2>
                        </div>  
                    </div>
                </div>";
            }
        }
    }

    public function anh($id){
        if(isset($_POST["submit"]))  
        // Uploads ???nh
        {
            //Get name
            $filename = $_FILES['image']['name'];
            $name  = explode('.', $filename);
            while (true) {
                $filename = str_replace('.','',uniqid($name[0], true));
                if (!file_exists(sys_get_temp_dir() . ($filename.'.'.$name[1]))) break;
            }
            $_FILES['image']['name'] = $filename.'.'.$name[1];
            $filename = $_FILES['image']['name'];
            // destination of the file on the server
            $destination = 'public/uploads/avatar/' . $filename;

            // get the file extension
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // the physical file on a temporary uploads directory on the server
            $file = $_FILES['image']['tmp_name'];

            if ($_FILES['image']['size'] > 2000000) { // file shouldn't be larger than 1Megabyte
                echo "<script>alert('K??ch th?????c ???nh qu?? l???n h??n 2MB')</script>";
            } else {
                // move the uploaded (temporary) file to the specified destination
                if (move_uploaded_file($file, $destination)) {
                    $sql = "UPDATE tbl_user SET `Avatar` = '$filename' where Id=$id"; 
                    if (mysqli_query($this->con, $sql)) {

                        echo '<script>alert("C???p nh???t ???nh th??nh c??ng")</script>';
                    }
                } else {
                    echo '<script>alert("C???p nh???t ???nh kh??ng th??nh c??ng")</script>';
                }
            }
}
    }
       
    public function xoa($id)
    {
        if (isset($_POST['xoa'])) {
            $shopid=$_POST['shopid'];
            $ge = "DELETE FROM `tbl_favoriteshop` WHERE UserId=$id AND ShopId = $shopid";
            mysqli_query($this->con, $ge);
            return  header("Location: " . BASE_URL . "/profile/cuahangyeuthich/$id");
            
        }
    }
    public function deleteLich($id){
        if(isset($_POST['cancel'])){
            $bookingId= $_POST['bookingId'];
            //update column IsCanceled = true and IsRequest = false in tbl_booking
            $sql = "UPDATE tbl_booking SET IsCanceled = 1, IsRequest = 0 WHERE Id = $bookingId";
            mysqli_query($this->con, $sql);
            return  header("Location: " . BASE_URL . "/profile/lichhen/$id");
        }
        
    }
   
}
