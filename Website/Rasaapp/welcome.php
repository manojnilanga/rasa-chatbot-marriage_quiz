<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body style="background-color: #00b1D2FF">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="color: black">
        <header class="jumbotron hero-spacer">
            <h2><?php echo 'Hello '.$_SESSION['name'];?></h2>
            <p><br>
<b>Law Leesa</b> is a Chat Bot which was built for the purpose of providing assistance to those who would  be unable to afford time and cost to meet lawyers. Law Leesa provides free, reliable legal information and guidance on marriages and divorces within Sri Lanka...

<br><br>No worries..your data is secured in all aspects.




<br><br>Can’t Afford a Lawyer?  We Can Help!

<br>Leesa helps with legal problems on divorce and marriages. We’re passionate about making sure that everyone in Sri Lanka, no matter how little money you have, has access to justice and enjoys real equality.
</p>
            <!-- <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p> -->
        </header>

        <hr>


      


        </div>

        <hr>


    </div>
    <div id="webchat"/>
        <script src="https://storage.googleapis.com/mrbot-cdn/webchat-latest.js"></script>
        // Or you can replace latest with a specific version
        <script>
        WebChat.default.init({
            selector: "#webchat",
            //initPayload: "/get_started",
            customData: {"language": "en"}, // arbitrary custom data. Stay minimal as this will be added to the socket
            socketUrl: "http://localhost:5005/",
            socketPath: "/socket.io/",
            title: "Law Leesa",
            //subtitle: "Subtitle",
            storage:"session"
            
        })
        </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>
