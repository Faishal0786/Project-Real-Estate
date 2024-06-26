<style>
    .nav-link {
        position: relative;
        display: inline-block;
        text-decoration: none;
        color: black;
    }
    
    .nav-link::before,
    .nav-link::after {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: greenyellow;
        transform: scaleX(0);
        transition: transform 0.5s;
        
    }
    
    .nav-link::before {
        bottom: 4px;
        transform-origin: right;
    }
    
    .nav-link::after {
        top: 4px;
        transform-origin: left;
    }
    
    .nav-link:hover::after,
    .nav-link:hover::before {
        transform: scaleX(1);
    }
   

</style>



<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ){

}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Topics</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php" tabindex="-1">Contact
                    </a>
                </li>
            </ul>
            <div class="row mx-2">
                     <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
                </form>
                </div>
                    <button class="btn btn-outline-success ml-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
                    </div>
                    </div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess'] ) && $_GET['signupsuccess']== "true"){
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert" mt-3>
    <strong>Successfully! </strong> Your account is created now you can login.......
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>