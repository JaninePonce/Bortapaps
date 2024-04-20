<?php
    include('../db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
    <title>Responsive Regisration Form </title>

</head>
<body ng-app="myApp">
    <div class="container">
        <div ng-include="'../SIDEBAR/sidemenu.html'"></div>
        <!----------------------------------------------- First Page --------------------------------------------------------------->
        <div class="title">
            <h2>Set up profile</h2>
        </div>
        <div class="details">
            <form class="infos" id="regform">
                <table class="grid">
                    <tr class="labels">
                        <td>First Name:</td>
                        <td>Middle Name:</td>
                        <td>Last Name:</td>
                        <td>Mobile Number:</td>
                    </tr>
                    <tr class="fields">
                        <td><input type="text" name="firstname" id="firstname" required></td>
                        <td><input type="text" name="middlename" id="middlename"></td>
                        <td><input type="text" name="lastname" id="lastname" required></td>
                        <td><input type="text" name="phonenum" id="phonenum" required></td>
                        
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr class="labels">
                        <td>Email Address:</td>
                        <td></td>
                        <td>Gender:</td>
                        <td>Date of Birth:</td>
                    </tr>
                    <tr class="fields">
                        <td colspan="2"><input type="email" name="email" id="email" style="width: 25vw;" required></td>
                        <td>
                            <input type="radio" name="Gender" id="Male" required>
                            <label for="Male" style="font-size: 25px;">🚹</label>
                            <input type="radio" name="Gender" id="Female" required>
                            <label for="Female" style="font-size: 25px;">🚺</label>
                        </td>
                        <td><input type="date" name="birthday" id="birthday" required></td>
                    </tr>
                    
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr class="labels">
                        <td colspan="3">Adress: </td>
                        <td>Country:</td>
                    </tr>

                    <tr class="fields">
                        <td colspan="3"><input type="text" name="address" id="address" style="width: 40vw;" required ></td>
                        <td><input type="text" name="country" id="country" required></td>
                    </tr>

                    <tr>
                        <td><br></td>
                    </tr>

                    <tr class="labels">
                        <td>ZIP Code:</td>
                        <td>State:</td>
                    </tr>

                    <tr class="fields">
                        <td><input type="text" name="pincode" id="pincode" required></td>
                        <td><input type="text" name="state" id="state" required></td>
                    </tr>

                </table>

                <div class="buttons">
                    
                <button type="submit" id="submitbtn" >Submit☑️</button>
                </div>
            </form>
        </div>
        
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="script.js"></script>

</html>