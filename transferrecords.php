<?php include 'dbcon.php'?>
<?php include 'header1.php'?>

<?php
$query = "SELECT * FROM transferrecords";
$result = mysqli_query($connection,$query);
?>

<div class="container">
    <table class="table table-bordered table-hover" style="border-radius: 5px;">
        <tr>
            <th>S. No.</th>
            <th>From</th>
            <th>To</th>
            <th>Credits Transfered</th>
        </tr>
        <?php
            while($rows = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" .$rows['id']. "</td>";
                echo "<td>" .$rows['From_user']. "</td>";
                echo "<td>" .$rows['To_user']. "</td>";
                echo "<td>" .$rows['creditstransfered']. "</td>";
                //echo "<td><button class='btn btn-primary'><a class='text-white' href='viewuser.php?id= ".$rows['id']." '>View</a></button></td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>


<?php include 'footer.php'?>