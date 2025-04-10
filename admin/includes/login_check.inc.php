<?php
session_start();
if(!isset($_SESSION['adminemail']))
{
    if(isset($_POST['submit']))
    {
        if(($_POST['adminemail']=="")||($_POST['adminpassword']==""))
        {
            echo '<script>window.alert("Please fill all fileds")</script>';
        }
        else
        {
            $adminemail=$_POST['adminemail'];
            $adminpassword=$_POST['adminpassword'];

            $sql ="SELECT * FROM admin_db WHERE adminemail ='".$adminemail."' AND adminpassword = '".$adminpassword."'";
            $result =$conn->query($sql);

            if($row=$result->num_rows ==1)
            {
                $_SESSION['adminemail']=$adminemail;
                $_SESSION['isLogin']=TRUE;
                // echo '<script>location.href="dashboard.php"</script>';
                header('Location: dashboard.php');
                
            }
            else
            {
                $msg ='<div class="alert alert-warning mt-2" role="alert">Wrong Credientials</div>';
            }
        }
    }

}
else
{
    // echo '<script>location.href="dashboard.php"</script>';
    header('Location : dashboard.php');
}

?>