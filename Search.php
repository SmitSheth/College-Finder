<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search College</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">COLLEGE FINDER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav-bar">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li style="margin-left:600px">
                      <a href="#">Account settings</a>
                      <ul>
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="change_pass.php">Change Password</a></li>
                        <li><a href="delete.php">Delete Account</a></li>
                      </ul>         
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   <div class="container">
  <div class="col-sm-4">
        </div>
  
<h1>COLLEGE FINDER</h1>
<!-- Registration form - START -->
<div class="col-sm-4"></div>
          
  <div class="col-sm-5" class="content1" >
    <h1 style="color:white; margin:30px 40px 0px;"><mark><b>SEARCH COLLEGE</button></mark></h1>
        
        <form role="form" action="set.php" class="form1" method='post'>  <!-- check-->
           <div>
                <label for="city" class="label1"><mark>CITY:</mark></label>                                          
                <select name="region" id="city" >
                  <option value="Pune">Pune</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Amravati">Amravati</option>
                  <option value="Aurangabad">Aurangabad</option>
                  <option value="Kolhapur">Kolhapur</option>
                </select>
           </div>     
           <div>     
                <label for="course" class="label1"><mark>COURSE:</mark></label>                                          
                <select name="course" id="course">
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Computer Engineering">Computer Engineering</option>
                  <option value="Mechanical Engineering">Mechanical Engineering</option>
                  <option value="Information Technology">Information Technology</option>
                  <option value="Electrical Engineering">Electrical Engineering</option>
                  <option value="Electronics Engineering">Electronics Engineering</option>
                  <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                  <option value="Electronics and Telecommunication Engg">Electronics & Telecommunucation</option>
                </select>   
           </div>
           <div>    
                <label for="caste" class="label1"><mark>CATEGORY:</mark></label>                                          
                <select name="caste" id="caste" >
                  <option value="open">OPEN</option>
                  <option value="sc">SC</option>
                  <option value="st">ST</option>
                  <option value="vj">VJ</option>
                  <option value="nt1">NT1</option>
                  <option value="nt2">NT2</option>
                  <option value="nt3">NT3</option>
                  <option value="obc">OBC</option>
                </select>   
           </div>
           <div>
                <label for="Round" class="label1"><mark>CAP-ROUND:</mark></label>                                          
                <select name="round" id="Round" >
                <option value="cap_round1">CAP1</option>
                <option value="cap_round2">CAP2</option>
                </select>
            </div>
           <div>  
                <label for="rank" class="label1"><mark>RANK:</mark></label>      
                <input type="number" id="rank" name="rank" placeholder="Enter Rank" min=1 max=100000 required>
           </div>  
           
           <div>
                <input type="submit" name="search" id="search" value="Search">
           </div>
        </form>
</div>
<!-- Registration form - END -->

</div>
        </div>
<div class="col-sm-4"></div>
   </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
