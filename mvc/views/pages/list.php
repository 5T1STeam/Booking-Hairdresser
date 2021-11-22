<h2>
</h2>

<?php
while($row = mysqli_fetch_array($data["List"]))
{
    echo $row["Id"];
    echo "-";
    echo $row["Name"];
    echo "<hr/>";
}
?>

