<?php include 'header1.php'?>
<?php include 'dbcon.php'?>


<?php

$query = "SELECT * FROM usersdata";
$result = mysqli_query($connection,$query);

?>

<div class="container">
    <table class="table table-bordered table-hover" style="border-radius: 5px;">
        <tr>
            <th>S. No.</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Credits</th>
            <th></th>
        </tr>
        <?php
            while($rows = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" .$rows['id']. "</td>";
                echo "<td>" .$rows['name']. "</td>";
                echo "<td>" .$rows['email']. "</td>";
                echo "<td>" .$rows['currentCredits']. "</td>";
                echo "<td><a class='text-white' href='viewuser.php?id= ".$rows['id']." '><button class='btn btn-primary'>View</button></a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>


<?php include 'footer.php'?>