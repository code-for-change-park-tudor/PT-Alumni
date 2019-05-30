
  <?php
   
    include_once("dbh.inc.php");

?>
<!DOCTYPE html>
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



    <div class="layer">
        <header id="ParkTudorHeader" class="ParkTudorHeader">
            <a class="link " href="https://www.parktudor.org" title="Park Tudor"><img src="imgs/logopt.svg" style="width:30vw; height:10vh; margin-top:1vh" /></a>
        </header>
        
        <div class="navbar">

            <div class="dropdown">
                <p style="color:#f1f1f1">
                    <b>Filter By:</b>
                </p>
            </div>
            <div
        <form name="form1" action="" method="post">
        <select>

        <?php
            $res=mysqli_query($conn, "SELECT DISTINCT user_university FROM users");
            while($row=mysqli_fetch_array($res)){
            ?>
                    <option><?php echo $row["user_university"]; ?> </option>
                      </form>
            <?php
        }
        ?>


    </select>
    <input type="submit" name="submit_uni" value="Go" />
    </form>

            <form name="form1" action="" method="post">
        <select>

        <?php
            $res=mysqli_query($conn, "SELECT DISTINCT user_graduation FROM users");
            while($row=mysqli_fetch_array($res)){
            ?>
                    <option><?php echo $row["user_graduation"]; ?> </option>
                      </form>

            <?php
        }
        ?>

    
    </select>
        <input type="submit" name="submit_year" value="Go" />
    </form>


</form>

            <form name="form1" action="" method="POST">
        <select>

        <?php
            $res=mysqli_query($conn, "SELECT DISTINCT user_major FROM users");
            while($row=mysqli_fetch_array($res)){
        ?>
                    <option><?php echo $row["user_major"]; ?> </option>
        </form>
            <?php
        }
        ?>

    
    </select>
     <input type="submit" name="submit_major" value="Go" />
    </form>

        </div>
           

        </div>
        <div>
        <header id="UserHeader" class="UserHeader">
            <a class="link " href="info.php" title="Add User" ><img src="imgs/user.png" style="width:2.5vw; height:5vh; margin-top:0.1vh" /></a>
        </div>
        </header>
      
    <div>
   if(isset($_POST['submit'])){    
    <table border="1" align "center" style="line-height:25px;">
    <tr>
    <th>User ID</th>
    <th>First</th>
    <th>Last</th>
    <th>Title</th>
    <th>Company</th>
    <th>University</th>
    <th>Graduation year</th>
    <th>Major</th>
    <th>Email</th>
    <th>Info</th>
    <th>Image</th>
    </tr>
    
<?php
	
   $sql="SELECT * from users;";
    $result = mysqli_query($conn, $sql);
    if(isset($_POST['submit_year'])){
        while($row =$result -> fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_first']; ?></td>
            <td><?php echo $row['user_last']; ?></td>
            <td><?php echo $row['user_title']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['user_university']; ?></td>
            <td><?php echo $row['user_graduation']; ?></td>
            <td><?php echo $row['user_major']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td><?php echo $row['user_info']; ?></td>
            <td><?php echo "<img src='uploads/".$row['image']."'>" ?></td>
            </tr>
            <?php
            
        }
       
    }

    else{
?>
    <tr>
        <th colspan="2"> NO DATA </th>
    </tr>
    <?php
    }
 ?>
</div>
</table>
</body>
</html>