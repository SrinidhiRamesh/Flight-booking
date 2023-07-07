<?php
require 'db_conn.php';
session_start();
?>

<html>

<head>
    <title>Cancel Flight</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Front with CSS.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>


<body background="31.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header" style="background-color:#A6D0DD;">
            <div class="mdl-layout__header-row" style="background-color:#A6D0DD;">
                <!-- Title -->
                <span class="mdl-layout-title" style="color:black;">Cancel a Flight</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a style="color:black;" class="mdl-navigation__link" href="home.php">Home</a>
                    <a style="color:black;"class="mdl-navigation__link" href="">About</a>
                    <a style="color:black;" class="mdl-navigation__link" href="front.php">Login</a>
                    <a style="color:black;" class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a style="color:black;" class="mdl-navigation__link" href="admin.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Cancel a Flight</span>
            <nav class="mdl-navigation">
                <a style="color:black;" class="mdl-navigation__link" href="home.php">Home</a>
                <a style="color:black;" class="mdl-navigation__link" href="">About</a>
                <a style="color:black;" class="mdl-navigation__link" href="front.php">Login</a>
                <a style="color:black;" class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a style="color:black;" class="mdl-navigation__link" href="admin.php">Administrators</a>
            </nav>
        </div>
        <br><br>
            <div class="page-content"><center>
                <br><br><br>
                <center>
        <br><br>
        <div class="mdl-card mdl-shadow--16dp" style="width:800px">
        <div class="mdl-shadow--16dp" style="background-color:#A6D0DD">
                        <br>
                        <div class="mdl-typography--title" style="color:black">Search Results</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
    <th>Ticket Id.</th>
    <th>Flight No.</th>
    <th>Origin</th>
    <th>Destination</th>
    <th>Date </th>      
    <th>Fare</th>
      <th>Select Flight</th>
    </tr>
  </thead>
  <tbody>
        <form action='user_cancel_success.php' method="POST">
            <?php
                $sql = "SELECT * from booking where Cid='".$_SESSION["Customer_id"]."' order by Date";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['TicketID'] . "</b></td>";
                    echo "<td>" . $row['F_no'] . "</td>";
                    echo "<td>" . $row['Source'] . "</td>";
                    echo "<td>" . $row['Destination'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "<td>" . $row['Fare'] . "</td>";
                    echo "<td><label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"".$row['TicketID']."\">
                    <input type=\"radio\" id=\"".$row['TicketID']."\" class=\"mdl-radio__button\" name=\"cancel_flight\" value=\"".$row['TicketID']."\">
                    </label></td>";
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#A6D0DD"><br>
<input type="Submit" style="background-color:#A7ECEE;color:black;" name="cancel" value="Cancel the selected Flight" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                
                    </button>
                    <br><br>
                    </div>
                    </div>
                    <br><br><br>
                    </div>
        </form>
        </div>
        </center>

            </div>
        </main>
    </body>
</html>
