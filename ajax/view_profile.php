<?php
    //include '../sessions/user_session.php';
    require '../config/school_connect_db.php';
    if(isset($_POST['fetct_data_btn'])){
       if(isset($_POST['user_id'])){
        $staff_id = $_POST['user_id'];
        // echo $staff_id;
        $sql = "SELECT * FROM staff_details_tbl WHERE id ='$staff_id'";
        $sql_run = mysqli_query($conn, $sql);
        // die($sql_run);
        if($sql_run){
            if($row=mysqli_fetch_array(($sql_run))){
                //$name=$row['first_name'];
                ?>
                <style>
                    .table-striped
                        {
                            -webkit-border-radius: 4px;
                            -moz-border-radius: 4px;
                            border-radius: 5px;
                        }
                </style>
                 <center><?php echo '<img class="rounded-circle" src="passports_teacher/'.$row['staff_image'].'" width="80" height="80">';?></center><br>
                <table class="table table-info table-striped text-dark font-weight-bold rounded">
                    <tr>
                        <td class="rounded">Full Name:</td>
                        <td class="bg-light"><?php echo $row['first_name']. ' '.$row['middle_name']. ' '.$row['last_name'];?></td>
                        <td class="">Staff ID:</td>
                        <td class="bg-light"><?php echo $row['staff_ID'];?></td>
                    </tr>
                    <tr>
                        <td class="">Phone Number:</td>
                        <td class="bg-light"><?php echo $row['phone_number'];?></td>
                        <td class="">Email Address:</td>
                        <td class="bg-light"><?php echo $row['email_address'];?></td>
                    </tr>
                    <tr>
                        <td class="">Gender:</td>
                        <td class="bg-light"><?php echo $row['gender'];?></td>
                        <td class="">Staff Role:</td>
                        <td class="bg-light"><?php echo $row['staff_role'];?></td>
                    </tr>
                    <tr>
                        <td class="">Date of Birth:</td>
                        <td class="bg-light"><?php echo $row['date_of_birth'];?></td>
                        <td class="">Qualification:</td>
                        <td class="bg-light"><?php echo $row['highest_qualification'];?></td>
                    </tr>
                    <?php if($usertype=='Admin' || $usertype=='Super-Admin' || $usertype=='Registrar'):?>
                    <tr>
                        <td class="">Date Employed:</td>
                        <td class="bg-light"><?php echo $row['date_employed'];?></td>
                        <td class="">Staff Status:</td>
                        <td class="bg-light"><?php echo $row['staff_status'];?></td>
                    </tr>
                    <?php endif;?>
                    <tr>
                        <td class="">Residential Address:</td>
                        <td class="bg-light" colspan="3"><?php echo $row['residential_address'];?></td>
                    </tr>
                </table>

                
<?php
            }
            else{?>
                <center class="row bg-red text-white rounded font-weight-bold">No record found for your input</center>
            <?php
                
            }
        }
       }
       else{?>
        <center class="row bg-green text-white rounded font-weight-bold">No ID Selected</center>
       <?php }
    }

?>

<script>
    const user_id = <?=$staff_id;?>
</script>