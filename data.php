<?php
 $insert = false;
if(isset($_POST['name'])){
    //set connection variable 
    $server = "localhost";
    $username = "root";
    $password = "";
 
  //Check for connection success
  $con = mysqli_connect($server,$username, $password,);
  if(!$con){
    die("connection to the database failed due to".mysqli_connect_error());
  }

    //echo"success connecting to the db";
    //collect post variables
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age =$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql = " INSERT INTO `trip3`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;
     
    //exicute  the quary
    if($con->query($sql)== True){
        // echo"successfully inserted";


        //flage for successful insertion
        $insert = true;
    }else{
        echo "ERROR; $sql <br>$con->error";
    }

    //close the database
    $con->close();

}
