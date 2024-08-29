<?php
include("connection.php");
include("crud/register_crud.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR BASED BUS TICKET RESERVATION & TRACKING SYSTEM - REGISTER</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="login.php"><button class="back-arrow-icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
    <div class="log">
        <h3 class="login-head">User Register</h3><br />
        <table>
           <form method="post" href="#" name="regfrm" onsubmit="return formData()">
               <tr>
                 <td>
                     <label for="uid">
                         UserID
                     </label>
                 </td>
                 <td><input type="text" name="uid" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="fname">
                         First Name
                     </label>
                 </td>
                 <td><input type="text" name="fname" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="mname">
                         Middle Name
                     </label>
                 </td>
                 <td><input type="text" name="mname" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="lname">
                         Last Name
                     </label>
                 </td>
                 <td><input type="text" name="lname" class= "reg-item" size="255" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="dob">
                         Date of Birth
                     </label>
                 </td>
                 <td><input type="date" name="dob" class= "reg-item" size="8" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="gender">
                         Gender
                     </label>
                 </td>
                 <td>
                     <select id="utype" name="gender" class="reg-item">
                         <option value="male">Male</option>
                         <option value="female">Female</option>
                     </select>
                 </td>
                
               </tr>

              <tr>
                 <td>
                     <label for="usertype">
                         User Type
                     </label>
                 </td>
                 <td>
                     <select id="utype" name="users" class="reg-item">
                         <option value="Administrator">Administrator</option>
                         <option value="Bus operator">Bus Operator</option>
                         <option value="Bus Driver">Bus Driver</option>
                         <option value="Passenger">Passenger</option>
                     </select>
                 </td>
               </tr>

               <tr>
                 <td>
                     <label for="nic">
                         NIC
                     </label>
                 </td>
                 <td><input type="text" name="nic" class= "reg-item" size="12" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="address">
                         Address
                     </label>
                 </td>
                 <td><textarea name="uaddress" rows="5" cols="30" class= "reg-item" required></textarea></td>
               </tr>

               <tr>
                 <td>
                     <label for="email">
                         Email
                     </label>
                 </td>
                 <td><input type="email" name="email" class="reg-item" size="30" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="mobile">
                         Mobile No
                     </label>
                 </td>
                 <td><input type="number" name="mobile" class= "reg-item" size="10" required/></td>
               </tr>

                <tr>
                 <td>
                     <label for="username">
                         Username
                     </label>
                 </td>
                 <td><input type="text" name="username" class= "reg-item" size="15" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="pwd">
                         Password
                     </label>
                 </td>
                 <td><input type="password" name="pwd" class= "reg-item" size="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at maximum 10 
                            characters" required/></td>
               </tr>

               <tr>
                 <td>
                     <label for="confirm-pwd">
                         Confirmed Password
                     </label>
                 </td>
                 <td><input type="password" name="confirm-pwd" class= "reg-item" size="10" required/></td>
               </tr>

               <tr>
                 <td>
                     <button type="submit" class="submit_btn" name="register">Submit</button>
                 </td>
                 <td>
                     <button type="reset" class="cancel_btn" name="cancel">Cancel</button>
                 </td>
               </tr>
           </form>
        </table>
    </div>

    <div class="password-message">
         <h3>User password must contain the following:</h3>
         <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
         <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
         <p id="number" class="invalid">A <b>number</b></p>
         <p id="length" class="invalid">Maximum <b>10 characters</b></p>
    </div>

    <script>
        function formData() {
            let uid = document.forms["regfrm"]["uid"].value;
            if (uid == "" && bno.length <= 10) {
               alert("User registration number must be included maximum 10 characters.");
           return false;
           }

           let fname = document.forms["regfrm"]["fname"].value;
           if (fname == "") {
               alert("First name must filled.");
           return false;
           }

           let lname = document.forms["regfrm"]["lname"].value;
           if (lname == "") {
               alert("Last name must filled.");
           return false;
           }

           let dob = document.forms["regfrm"]["dob"].value;
           if (dob == "") {
               alert("Date of birth must filled.");
           return false;
           }

           let gender = document.forms["regfrm"]["gender"].value;
           if (gender == "") {
               alert("Gender must be filled.");
           return false;
           }

           let users = document.forms["regfrm"]["users"].value;
           if (users == "") {
               alert("User type must filled.");
           return false;
           }

           let nic = document.forms["regfrm"]["nic"].value;
           if (nic == "" && nic.length <= 12) {
               alert("NIC must be filled.");
           return false;
           }

           let uaddress = document.forms["regfrm"]["uaddress"].value;
           if (uaddress == "") {
               alert("Residence address must be filled.");
           return false;
           }

           let email = document.forms["regfrm"]["email"].value;
           if (email == "" && email.length <= 30) {
               alert("Email must be filled.");
           return false;
           }

           let mobile = document.forms["regfrm"]["mobile"].value;
           if (mobile == "" && mobile.length <= 10) {
               alert("Mobile number must be included maximum 10 characters.");
           return false;
           }

           let username = document.forms["regfrm"]["username"].value;
           if (username == "" && username.length <= 15) {
               alert("Username must be filled.");
           return false;
           }

           let pwd = document.forms["regfrm"]["pwd"].value;
           if (pwd == "" && pwd.length <= 10) {
               alert("Password must be filled.");
           return false;
           }

           let confirm-pwd = document.forms["regfrm"]["confirm-pwd"].value;
           if (pwd == "" && confirm-pwd == pwd) {
               alert("Confirmed password matched with password.");
           }else{
               alert("Invalid password!);
           }

           var pwd = document.getElementById("pwd");
           var letter = document.getElementById("letter");
           var capital = document.getElementById("capital");
           var number = document.getElementById("number");
           var length = document.getElementById("length");

           pwd.onfocus = function() {
           document.getElementById("password-message").style.display = "block";
       }

           pwd.onblur = function() {
           document.getElementById("password-message").style.display = "none";
       }

           pwd.onkeyup = function() {

           var lowerCaseLetters = /[a-z]/g;
           if(pwd.value.match(lowerCaseLetters)) {  
           letter.classList.remove("invalid");
           letter.classList.add("valid");
           } else {
           letter.classList.remove("valid");
           letter.classList.add("invalid");
       }
  
           var upperCaseLetters = /[A-Z]/g;
           if(pwd.value.match(upperCaseLetters)) {  
           capital.classList.remove("invalid");
           capital.classList.add("valid");
           } else {
           capital.classList.remove("valid");
           capital.classList.add("invalid");
       }

           var numbers = /[0-9]/g;
           if(pwd.value.match(numbers)) {  
           number.classList.remove("invalid");
           number.classList.add("valid");
           } else {
           number.classList.remove("valid");
           number.classList.add("invalid");
       }
  
           if(myInput.value.length <= 10) {
           length.classList.remove("invalid");
           length.classList.add("valid");
           } else {
           length.classList.remove("valid");
           length.classList.add("invalid");
       }

    }
  </script>
</body>
</html>
