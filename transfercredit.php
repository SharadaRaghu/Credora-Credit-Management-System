<?php include 'dbcon.php'?>
<?php include 'header1.php'?>

<?php
if(isset($_POST['transfercre']))
{
    $from_id = trim($_POST['fromtc']);
    $to_id = trim($_POST['toid']);
    $credits = trim($_POST['credits']);  
    $error = false;

    //Query for users data
    $from_query = "SELECT * FROM usersdata WHERE id='$from_id'";
    $from_result = mysqli_query($connection,$from_query);
    $row_from = mysqli_fetch_assoc($from_result);
    $from_name = $row_from['name'];

    //from user credits
    $fetchfrom_credit_db = $row_from['currentCredits'];

    //Query for user to which credit is to be transfered
    $to_query = "SELECT * FROM usersdata WHERE id='$to_id'";
    $to_result = mysqli_query($connection,$to_query);
    $row_to = mysqli_fetch_assoc($to_result);
    $to_name = $row_to['name'];
    
    //to user credits
    $fetchto_credit_db = $row_to['currentCredits'];

    if((int)$credits>(int)$fetchfrom_credit_db)
    {
        $errors = "Insufficient Credits";
        $error = true;
    }
    if(!$error)
    {
        //from user credits update
        $userfrom_final_credit = "UPDATE usersdata SET ";
        $userfrom_final_credit .= "currentCredits=currentCredits-$credits WHERE id=$from_id";
        $query = mysqli_query($connection,$userfrom_final_credit);
        if(!$query)
        {
            die("QUERY FAILED".mysqli_error($connection));
        }

        //to user credit update
        $userto_final_credit = "UPDATE usersdata SET ";
        $userto_final_credit .= "currentCredits=currentCredits+$credits WHERE id=$to_id";
        $query = mysqli_query($connection,$userto_final_credit);

        //insert into tranfer records
        $query1 = "INSERT INTO transferrecords(From_user,To_user,creditstransfered) VALUES('$from_name','$to_name','$credits')";
        $res = mysqli_query($connection,$query1);

        $success = "Successfully transfered";
        echo "<script>window.location.href='viewuser.php?id=$from_id&success=$success'</script>";
      
    }else{
        echo "<script>window.location.href='viewuser.php?id=$from_id&errors=$errors'</script>";
    }

}

?>