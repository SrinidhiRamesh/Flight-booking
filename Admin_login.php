<html>
<head>
    <link rel="stylesheet" href="Front with CSS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body background="22.jpg" style="background-color:#FFEADD;">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header style="background-color:#FFEADD;color:black;"class="mdl-layout__header">
            <div class="mdl-layout__header-row" style="background-color:#FFEADD;">
                <!-- Title -->
                <span class="mdl-layout-title"  style="background-color:#FFEADD;">Home</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"  style="background-color:#FFEADD;"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only"  style="background-color:#FFEADD;">
                    <a style="color:black" class="mdl-navigation__link" href="home.php">Home</a>
                    <a style="color:black" class="mdl-navigation__link" href="form.php">Signup</a>
                    <a style="color:black" class="mdl-navigation__link" href="front.php">Login</a>
                    <a style="color:black" class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                    <a style="color:black" class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer"  style="background-color:#FFEADD;">
            <span class="mdl-layout-title">Home</span>
            <nav class="mdl-navigation"  style="background-color:#FFEADD;">
                <a style="color:black" class="mdl-navigation__link" href="home.php">Home</a>
                <a style="color:black" class="mdl-navigation__link" href="form.php">Signup</a>
                <a style="color:black" class="mdl-navigation__link" href="front.php">Login</a>
                <a style="color:black" class="mdl-navigation__link" href="Aboutus.php">About Us</a>
                <a style="color:black" class="mdl-navigation__link" href="Admin_login.php">Administrators</a>
            </nav>
        </div>
        <main class="mdl-layout__content" >
            <div class="page-content">
            <br><br><br>
            <center>
                    <div class="demo-card-wide mdl-card mdl-shadow--16dp">
                        <div class="mdl-shadow--16dp" style="background-color:#FFEADD">
                        <br>
                        <div class="mdl-typography--title" style="color:black">Administartors Login</div>
                        <br>
                        </div>
                        
                        <form action="logged_admin.php" method="POST">
                            <br>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Loginid" name="Loginid">
                            <label class="mdl-textfield__label" for="Loginid">User Name</label>
                        </div>
<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="Password" name="Password">
                            <label class="mdl-textfield__label" for="Password">Password</label>
                        </div><br><br>
                        <div class="mdl-shadow--16dp" style="background-color:#FFEADD">
                      <br>
                        <input style="background-color:#A2CDB0" type="submit" name="login" value="Login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"/>
                        
                        <BR><br>
                        </div>
                       </div> 
                       </form>
            </center>
            </div><br><br><br><br><br><br><br><br><br><br>

            </main>
            </body>
            </html>