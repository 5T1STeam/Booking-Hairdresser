<?php
while($row = mysqli_fetch_array($data["ADV"])){
    echo $row["Name"]."<br>";
}
?>