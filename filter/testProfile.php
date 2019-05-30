<html>

<head>
    <meta charset="utf-8" />
    <title>Park Tudor</title>
    <link rel="stylesheet" type="text/css" href="css/cssForMainPage.css" S />
    <link rel="stylesheet" type="text/css" href="css/dropDownCSS.css" S />
    <link rel="stylesheet" type="text/css" href="css/profiles.css" S />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="functionsForMainPage.js"></script>
</head>

<body>


<?php
//define variables and set to empty values
require "dbconnection.php";
$conn = OpenCon();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ($_POST["name"]);
  $university = ($_POST["university"]);
}
elseif (!isset($name) or !isset($company)){
	$name = "John Doe";
	$university = "Harvard University";
}
echo nl2br($name);
echo "<br>";
echo nl2br($university);

?>

    <div class="layer">
        <header id="ParkTudorHeader" class="ParkTudorHeader">
          <!-- add in href="https://www.parktudor.org" -->
            <a class="link" title="Park Tudor"><img src="imgs/logopt.svg" style="width:30vw; height:10vh; margin-top:1vh" /></a>
            <form method="post" action="" class=inputForm>
            Name: <input type="text" name="name"><br>
            University: <input type="text" name="university"><br>
            <input type="submit">
            </form>
            <br>
            <br>
        </header>
        <div class="navbar">
            <div class="dropdown">
                <p style="color:#f1f1f1">
                    <b>Filter By:</b>
                </p>
            </div>
            <div class="dropdown" onclick="schoolDropDown()">
                <button class="dropbtn">
                    <b>School</b>
                    <i id="schoolToggle" class="fa fa-plus"></i>
                </button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Indiana University</a>
                    <a href="#">Purdue University</a>
                    <a href="#">University of Notre Dame</a>
                </div>
            </div>
            <div class="dropdown" onclick="majorDropDown()">
                <button class="dropbtn">
                    Major
                    <i id="majorToggle" class="fa fa-plus"></i>
                </button>
                <div id="myDropdownA" class="dropdown-content-a">
                    <a href="#">Political Science</a>
                    <a href="#">Economics</a>
                    <a href="#">Computer Science</a>
                </div>
            </div>
            <div class="dropdown" onclick="stateDropDown()">
                <button class="dropbtn">
                    State
                    <i id="stateToggle" class="fa fa-plus"></i>
                </button>
                <div id="myDropdownB" class="dropdown-content-b">
                    <a href="#">Indiana</a>
                    <a href="#">New York</a>
                    <a href="#">Illinois</a>
                </div>
            </div>
            <div class="dropdown" onclick="yearDropDown()">
                <button class="dropbtn">
                    Year
                    <i id="yearToggle" class="fa fa-plus"></i>
                </button>
                <div id="myDropdownC" class="dropdown-content-c">
                    <a href="#">2019</a>
                    <a href="#">2018</a>
                    <a href="#">2017</a>
                </div>
            </div>
            <div class="search" id="search">
                <input type="text" placeholder="Search..." />
                <button type="submit" id="searchSubmit"><i id="searchSubmit" class="fa fa-search"></i></button>
            </div>
        </div>

        <div class="card">
            <img src="imgs/default-user.png" alt="John" style="width:8vw; margin-top: 1vh">
            <h1><?php echo $name;?></h1>
            <p class="title">CEO & Founder, Example</p>
            <p><?php echo $university;?></p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p style="color:darkred"><button class="contact">Contact</button></p>
        </div>
        <div class="card">
            <img src="imgs/default-user.png" alt="John" style="width:8vw; margin-top: 1vh">
            <h1><?php echo $name;?></h1>
            <p class="title">CEO & Founder, Example</p>
            <p><?php echo $university;?></p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button class="contact">Contact</button></p>
        </div>
        <div class="card">
            <img src="imgs/default-user.png" alt="John" style="width:8vw; margin-top: 1vh">
            <h1><?php echo $name;?></h1>
            <p class="title">CEO & Founder, Example</p>
            <p><?php echo $university;?></p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <p><button class="contact">Contact</button></p>
        </div>
    </div>
</body>
</html>