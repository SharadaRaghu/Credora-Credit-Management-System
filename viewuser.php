
<?php include 'dbcon.php'?>


<style>
    p{
        margin-left: 20px;
    }
</style>
 

<?php session_start();


if(isset($_GET['id'])) 
{   
    //Session Start 
$_SESSION['id'] = $_GET['id'];
?>

<?php include 'header1.php'?>

<div class="jumbotron" style="margin-left: 20px;margin-right: 20px;">
<?php
if(isset($_GET['errors'])){
    $error=$_GET['errors'];
    echo "<div class='alert alert-danger'>
            $error</div>";
}
if(isset($_GET['success'])){
    $success= $_GET['success'];
    echo "<div class='alert alert-success'>
           $success</div>";
}?>
<?php
$txt = $_GET['id'];
$result = mysqli_query($connection,"SELECT * FROM usersdata where id=" . $txt);
while($row = mysqli_fetch_array($result)) 
{?>
    <div class="row">
        <div class="col-md-6">
            <p><b>Name : </b>
                <?php echo  $row['name'];?>
            </p>
        </div>
        <div class="col-md-6">
            <p><b>Email : </b>
                <?php echo  $row['email'];?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p><b>Current Credits :</b> 
                <?php echo  $row['currentCredits'];?>
            </p>
        </div>
        <div class="col-md-6">
            <p><b>Mobile num : </b>
                <?php echo  $row['mobNo']?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p><b>College :</b> 
                <?php echo  $row['College'];?>
            </p>
        </div>
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Transfer Credits
            </button></p>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transfer Credits</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="transfercredit.php" method="POST">
                        <div class="form-group">
                            <label for="tranfercredit">Enter the number credits to be transfered:</label>
                            <input type="number" class="form-control" name="credits" id="tcid" required>
                            <input name="fromtc" type="hidden" value="<?php echo $txt;?>">
                            <label for="selectname">Select name to tranfer the credits</label>
                            <select class="form-control" name="toid" id="tcname1">
                                <?php
                                $query = "select * from usersdata where id!='".$txt."'";
                                $result = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_array($result))
                                {?>
                                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                <?php
                                }?>
                            </select>
                            
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="transfercre">Transfer</button>
                        </div>
                    </form>

                    
                
            </div>
            
            </div>
        </div>
    </div>  
    <?php
}   
}?>
</div>
</div>
<?php include 'footer.php'?>