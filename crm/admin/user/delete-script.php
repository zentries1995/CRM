<?php 
require '../dbconnection.php';

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `zentries_customers` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        header("Location: https://zentries.com/crm/admin/?page=user/Zentries_customer_list");
       

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>