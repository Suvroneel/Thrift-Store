    <!-- connecting connect.php file to this file, to use $con -->
    <?php
    include('./includes/connect.php');
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> ECOMMERCE PROJECT </title>
        <!-- BOOTSTRAP CSS LINK -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
        <!-- FONT AWESOME LINK -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- css file -->
        <link rel="stylesheet" href="STYLE.css">
    <body>

    <!-- navigation bar ,  bootstrap class = div.container fluid  - it will take entire width  -->
    <div class="container-fluid p-0 ">
        <!-- first child inside div class , i.e nav bar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #d63384;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shirt"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="INDEX.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="display_all_products.php">PRODUCTS</a>
            </li>
            <?php
          if(isset($_SESSION['username'])){
            echo "<li class='nav-item'>
            <a class='nav-link' href='user_profile.php'>MY PROFILE</a>
          </li>";
          }
          else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='user_registration.php'>REGISTER</a>
          </li>";
          }
          ?>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- end of first nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-autO">

    <?php
    if(!isset($_SESSION['username'])){
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>WELCOME GUEST</a>
      </li>";
      }
      else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>WELCOME ".$_SESSION['username']."</a>
      </li>";
      }
    if(!isset($_SESSION['username'])){
        echo "<li class='nav-item'>
        <a class='nav-link' href='user_login.php'>Login</a>
    </li>";
    }
    else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='user_logout.php'>Logout</a>
    </li>";
    }
    ?>
        </ul>
    </nav>

    <!-- third child -->
    <div class="thirdpara">
        <h3 class="text-center">THRIFT SHOPPING</h3>
        <p  class="text-center" >
        GET YOUR FASHION AT CHEAPER PRICES 
        </p>
    </div>
    <!-- forth child -->
    <div class="row px-1">
        <div class="col-md-12">
            <div class="row">
                <?php
                include('payment.php');
                ?>
            </div>
        </div>
    </div>

    <!-- last child - footer -->
    <div style="background-color: #d63384;" class="footer">
    <p> Ecommerce site - Designed by SHREYASI SUVRONEEL ISHIKA </p>
    </div>
    </div>



    <!-- BOOTSTRAP JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
    </html>
