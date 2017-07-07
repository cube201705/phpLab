<?php include("header.php"); ?>
<div id="content" class="clearfix">
<table>
<?php
$dbc = new mysqli("127.0.0.1", "wp_eatery", "password", "wp_eatery");
if (mysqli_connect_errno()){
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
} else{
$query = "SELECT concat(`firstName`, ' ', `lastName`) AS FullName, `emailAddress` AS Email, `username`, `phoneNumber` AS Phone FROM `mailinglist`";

$result = mysqli_query($dbc, $query);

     echo '<tr>';
     echo '<table border=\'1\'>';
     echo '<tr><th>FullName</th><th>Email</th><th>username</th><th>Phone</th></tr>';
     while($row = mysqli_fetch_array($result)){
     echo '<td>' . $row['FullName']  . '</td>';
     echo '<td>' . $row['Email'] . '</td>';
     echo '<td>' . $row['username'] . '</td>';
     echo '<td>' . $row['Phone'] . '</td>';
     echo '</tr>';
     
    }

$dbc->close();
} 
/**echo phpinfo(); */
?>
</table>
</div>
<?php include("footer.php"); ?>