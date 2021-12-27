
   <?php

   $NameError="";
   $EmailError="";
   $NumberError="";
   $AddressError="";

   $connection = mysql_connect("localhost", "root", "");
   if (!$connection) {
     die ("Database Connection Failed" . mysql_error($connection));

   }

   $select_db= mysql_select_db('patient_data');
   if (!$select_db) {
     die("Database selection failed" . mysql_error($connection));
   }

   if (isset($_POST['Submit'])) {

     if (empty($_POST["Name"])) {
       $NameError="Name is required!";
     }
     else {
       $Name=Test_user_input ($_POST["Name"]);

       if (!preg_match ("/^[A-Za-z. ]*$/", $Name)) {
         $NameError="Only Letters and White spaces are allowed";
     }
     }

     if (empty($_POST["Email"])) {
       $EmailError="Email is required!";
     }
     else {
       $Email=Test_user_input ($_POST["Email"]);
       if (!preg_match ("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email)) {
         $EmailError="Invalid Email format ";
     }
     }

     if (empty($_POST["PhoneNumber"])) {
       $NumberError="Phone Number is required!";
     }
     else {
       $PhoneNumber=Test_user_input ($_POST["PhoneNumber"]);
       if (!preg_match ("/^(?:\+88|01)?(?:\d{11}|\d{13})$/", $PhoneNumber)) {
         $NumberError="Invalid Phone Number";
       }


       if (empty($_POST["Address"])) {
         $AddressError="Address is required!";
       }
     }
     if (!empty ($_POST["Name"]) && !empty ($_POST["Email"]) && !empty ($_POST["PhoneNumber"]) && !empty($_POST["Address"])) {
     if ((preg_match ("/^[A-Za-z. ]*$/", $Name)==true) && (preg_match ("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email)==true) && (preg_match ("/^(?:\+88|01)?(?:\d{11}|\d{13})$/", $PhoneNumber) == true)) {

    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Address=$_POST['Address'];


    $query = "INSERT INTO patient_info (Cname, Cemail, Cnumber, Caddress) VALUES ('$Name', '$Email', '$PhoneNumber', '$Address')";
    $result = mysql_query($query);

    if ($result) {
      echo '<span class="success"> You have successfully registerd! </span>' ;
    }


    }


  }

   else {
     echo "<h1> Please Complete and correct your form again! <h1>";
   }


}


   function Test_user_input($Data){
     return $Data;
   }
   ?>



<!DOCTYPE html>
<head>
  <title>E Health Care - Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


  <div class="" id="">
      <center>
        <h1><strong>Patient Registration</h1></strong>
      </center>
      <form action="patient-form.php" method= "post">
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" Name="Name" id="exampleInputName" placeholder="Full Name" required>
             * <?php echo "$NameError"; ?><br>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" Name="Email" id="exampleInputEmail1" placeholder="abc@xyz.com" required>
             * <?php echo "$EmailError"; ?><br>
          </div>

          <div class="form-group">
            <label for="exampleInputNumber">Phone Number</label>
            <input type="number" class="form-control" Name="PhoneNumber" id="exampleInputNumber" placeholder="Phone Number"required>
          * <?php echo "$NumberError" ?><br>
          </div>


          <div class="col-md-6">
             <div class="form-group">
              <label for="Address">Address</label>
              <textarea class="form-control" Name="Address" rows="5" id="Address"></textarea>
              * <?php echo "$AddressError" ?><br>
            </div>

        </div>

        <button type="submit" Name="Submit" class="btn btn-primary sub">Submit</button>

       </div>
      </form>
      </div>

</body>
