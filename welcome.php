

<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume & Job Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css"><style>
    .ocean {
    height: 5%;
    width:100%;
    position:absolute;
    bottom:0;
    left:0;
    background: #015871;
}

.wave {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
    position: absolute;
    top: -198px;
    width: 6400px;
    height: 198px;
    animation: wave 5s cubic-bezier( 0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
}

.wave:nth-of-type(2) {
    top: -175px;
    animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
}

@keyframes wave {
    0% {
        margin-left: 0;
    }
    100% {
        margin-left: -1600px;
    }
}

@keyframes swell {
    0%, 100% {
        transform: translate3d(0,-25px,0);
    }
    50% {
        transform: translate3d(0,5px,0);
    }
}
.col-md-9{
    position: absolute;
}

.card {
    transition: all 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05);
}


.animate__animated {
    animation-duration: 1s;
}

.animate__animated.animate__fadeInLeft {
    animation-name: fadeInLeft;
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0);
    }

    to {
        opacity: 1;
        transform: none;
    }
}


.animate__animated.animate__fadeInRight {
    animation-name: fadeInRight;
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translate3d(100%, 0, 0);
    }

    to {
        opacity: 1;
        transform: none;
    }
}

.typing-text {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    font-size: 3em;
    font-weight: bold;
    font-family: sans-serif;
    color: #333;
    width: 0;
  }

  .cursor {
    display: inline-block;
    vertical-align: middle;
    width: 10px;
    height: 30px;
    margin-left: 5px;
    background-color: #333;
    animation: blink 0.5s infinite;
  }

  @keyframes typing {
    from { width: 0 }
    to { width: 100% }
  }

  @keyframes blink {
    from { opacity: 0 }
    to { opacity: 1 }
  }

  .animate__animated {
    animation-duration: 1s;
    animation-fill-mode: both;
  }

  .animate__fadeInDown {
    animation-name: fadeInDown;
  }

  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translate3d(0, -100%, 0);
    }

    to {
      opacity: 1;
      transform: none;
    }
  }
    </style>
    
</head>
<body>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">My Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
  <div class="row justify-content-center"> <!-- add justify-content-center class -->
    <div class="col-md-9">
      <!-- Main Content Area -->
      <!--<div class="row">
        <div class="col-md-12">
          <h1 class="text-center animate__animated animate__fadeInDown">Welcome <?php echo "".$_SESSION['username']?> to your Resume & Job Dashboard</h1>
        </div>
      </div>--><div class="row">
     <div class="col-md-12">
       <h1 class="text-center animate__animated animate__fadeInDown">Welcome <?php echo "".$_SESSION['username']?> to your Resume & Job Dashboard</h1>
     </div>
</div>

      <div class="row">
        <div class="col-md-6 animate__animated animate__fadeInLeft">
          <div class="card mx-auto"> <!-- add mx-auto class -->
            <div class="card-body">
              <h5 class="card-title">Resume Generator</h5>
              <p class="card-text">Create a professional-looking resume in minutes with our easy-to-use resume builder.</p>
              <a href="template.php" class="btn btn-primary">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 animate__animated animate__fadeInRight">
          <div class="card mx-auto"> <!-- add mx-auto class -->
            <div class="card-body">
              <h5 class="card-title">Job Search</h5>
              <p class="card-text">Find the perfect job for you with our comprehensive job search tool to get your career started.</p>
              <a href="findjob.php" class="btn btn-primary">Search Jobs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    
    
    </body></html>