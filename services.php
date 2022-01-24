<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/servicestyle.css">
    <title>Services</title>
</head>
<body>
    <!-- Navigation Bar  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-2 ">
                    <h1 id="logo"><i class="fas fa-recycle"></i> Green Trash</h1>
                </div>
                <div class="col-md-8 my-2">
                    <ul id="menu" class="float-md-end">
                    <li><a href="index.php">Home</a></li>
                        <li><a href="About/about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><div class="dropdown">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              Login/SignUp
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                              <li><a class="dropdown-item" href="login.php">User Login</a></li>
                              <li><a class="dropdown-item" href="Admin/login.php">Admin Login</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Heading -->
    <div class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 heading">
                    <h1 class="text-capitalize text-center">Services</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>



    <!-- Cards -->
    <div class="cards mt-5">
        <div class="container mt-5 text-light">
            <div class="row justify-content-evenly">
                <div class="col-md-3 serve p-3">
                    <p class="text-center text-capitalize paraHeading">Sell Waste</p>
                    <hr class="mb-5">
                    <p class="my-5 text-center">Reduce the amount of waste sent to landfills and incinerators by selling recyclable materials.</p>
                </div>
                <div class="col-md-3 serve p-3">
                    <p class="text-center text-capitalize paraHeading">Buy Waste</p>
                    <hr class="mb-5">
                    <p class="my-5 text-center">By purchasing recycled products, you encourage manufacturing methods that limit resource use, and energy waste, by producing items from a reusable material. </p>
                </div>
                
                <div class="col-md-3 serve p-3">
                    <p class="text-center text-capitalize paraHeading">recycle info</p>
                    <hr class="mb-5">
                    <p class="my-5 text-center">Recycling reduces the need for extracting, refining and processing raw materials all of which create air and water pollution. As recycling saves energy it also reduces greenhouse gas emissions, which helps to tackle climate change.</p>
                </div>
            </div>
        </div>
    </div>




   
<!-- Buttons for sell , buy and recycle info page -->
<div class="buttons my-5">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-md-3 text-center mt-2">
                <button class="btn btn-success w-75"><a href="login.php" class="btns">Login to know more</a></button>
            </div>
            <div class="col-md-3 text-center mt-2">
                <button class="btn btn-success w-75"><a href="login.php" class="btns">Login to know more</a></button>
            </div>
           
            <div class="col-md-3 text-center mt-2">
                <button class="btn btn-success w-75"><a href="login.php" class="btns">Login to know more</a></button>
            </div>
        </div>
    </div>
</div>

    <!-- Footer -->
    <div id="footer" class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="font-size: 15px;">@copyright greentrash.com</div>
                <div class="col-md-6">
                    <ul id="icons" class="float-md-end">
                        <li><a href="" class="fab fa-facebook-square"></a></li>
                        <li><a href="" class="fab fa-twitter-square"></a></li>
                        <li><a href="" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>