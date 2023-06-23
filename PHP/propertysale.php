<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Lko Property Wale -Sell Property</title>
    <!-- code for icon -->
    <link rel="icon" href="../images/icon.png" type="image/gif" sizes="20x20">
    <!-- link of css -->
    <link rel="stylesheet" href="../css/saleproperty.css">
</head>

<body>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- MAIN CODE STARTS HERE -->
    <div class="container" id="topHeadStyle">
        <h1><span style="font-weight:bold;">Lko Propertywale</span> : Sell Property</h1>
    </div>

    <!-- main form code starst here -->
    <div class="container mainFormConatiner">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <strong>Personal Details</strong>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="text" name="name" id="name" placeholder="Name" required minlength="3" required>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="text" name="phone" id="phone" placeholder="Phone No" pattern="[7-9]{1}[0-9]{9}"
                        title="Invalid Number or Not Include +91" required>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <select name="ownerType" id="ownerType" required>
                        <option disabled selected>How Are You?</option>
                        <option value="">Owner Of Property</option>
                        <option value="">Agent Of Property</option>
                        <option value="">Other</option>
                    </select>
                </div>

                <div class="col-12">
                    <input type="text" name="Paddress" id="Paddress" placeholder="Address" required>
                </div>

            </div>
            <br>
            <strong>Property Details</strong>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <select name="ownerType" id="ownerType" required>
                        <option disabled selected>Property Type</option>
                        <option value="">Independent House</option>
                        <option value="">Flat</option>
                        <option value="">Plot</option>
                    </select>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="text" name="area" id="area" placeholder="Property Area , sqft" required>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="text" name="propertyAddress" id="propertyAddress" placeholder="Property Address"
                        required>
                    <br>
                    <span><input type="checkbox" onclick="samePropertyFun()"
                            style="transform: scale(1.3);margin-top:10px;"> Same Address Mentioned On Persoanl
                        Details</span>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <input type="text" name="propertyPrice" id="propertyPrice" placeholder="Estimated Property Price"
                        required>
                </div>

            </div>

            <div class="row">
                <div
                    class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-8 offset-xl-4 offset-lg-4 offset-md-3 offset-sm-2 offset-2">
                    <button type="submit" name="propertySubmit">Submit Property</button>
                </div>
            </div>
        </form>
    </div>

    <!-- PHP CODE FOR SUBMI THE FORM -->
    <?php
if(isset($_POST['propertySubmit'])){
require("config.php");
$name = $phone = $email = $propertySeller =  $address = $propertyType = $propertyArea = $propertyAddress = $propertyPrice = "";

$name  = htmlspecialchars($_POST['name']);
$phone  = htmlspecialchars($_POST['phone']);
$email  = htmlspecialchars($_POST['email']);
$propertySeller  = htmlspecialchars($_POST['ownerType']);
$address  = htmlspecialchars($_POST['Paddress']);
$propertyType  = htmlspecialchars($_POST['ownerType']);
$propertyArea  = htmlspecialchars($_POST['area']);
$propertyAddress  = htmlspecialchars($_POST['propertyAddress']);
$propertyPrice  = htmlspecialchars($_POST['propertyPrice']);
//  sql query  for connectinmg into the database
$sql ="INSERT INTO `propertysell` (`S.No`, `Name`, `Email`, `PropertySeller`, `PersonAddress`, `PropertyType`, `PropertyArea`, `PropertyAddress`, `PropertyPrice`, `DateTime`) VALUES (NULL, '$name', '$email', '$propertySeller', '$address', '$propertyType', '$propertyArea', '$propertyAddress', '$propertyPrice', current_timestamp());";

$run  = mysqli_query($conn, $sql);
if($run){
    echo("<script>alert('Data Is Inserted SuccessFully.....')</script>");
}
else{
    echo("<script>alert('Data Is Not Inserted SuccessFully.....')</script>");
}
}

?>
<!-- code for footer -->
<footer>
<strong>All Rights Reserved &#169; lko propertwale 2020 - 2023</strong>
</footer>
    <!-- javascript code starts here -->
    <script>
    function samePropertyFun() {
        let personAddress = document.getElementById("Paddress").value;
        document.getElementById("propertyAddress").value = personAddress;
    }
    </script>
</body>

</html>