<?php
include 'config.php';

session_start();
if(isset($_POST['log_submit'])){
    $loginEmail = $_POST['login_email'];
    $loginPword = md5($_POST['login_password']);

    //selecting from database
    $sql = "SELECT * FROM `users` WHERE `email` = '$loginEmail' AND `password`= '$loginPword'";
    $result = mysqli_query($conn, $sql);

    //check if there are rows inside
    if(mysqli_num_rows($result) == 1){
        $rows=mysqli_fetch_assoc($result);
        $_SESSION['ID']= $rows['userid'];
        $_SESSION['NAME']= $rows['name'];
    }
    else{
        $_SESSION['Error']='Invalid Credentials';
        header('Location: index.php');
    }
    $conn->close();
}

if(isset($_POST['submit_info'])){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['flexRadioDefault'];
    $id = $_SESSION['ID'];

    $query="UPDATE `users` SET `height`='$height', `weight`='$weight', `gender` ='$gender' WHERE `userid`='$id' ";
    $inforesult=mysqli_query($conn,$query);

}

if(isset($_POST['logOutUser'])){
    session_start();
    session_destroy();
    header("Location: index.php");
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeûne</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .dropdown-item{
            position: absolute;
            margin-top:10px;
            margin-right:5px;
            right:0;
            width: 10%;
            text-align:center;
            background-color:#F57474;
        }
        .nav img{
            width: 20%;
        }
        .nav{
        
            background-image: url('img/image 1.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            display:flex;
            justify-content: center;
        }
        .form{
            margin-top:5% !important;
            border:1px solid #00750C;
            display:flex;
            flex-direction:row;
        }
        
        .form input[type=text]{
            width:500px;
        }
        .first{
            flex:.6;
        }
        .first button{
            background-color:#06BA18;
            color:white;
            border:none;
            border-radius:3px;
            width:20rem;
            margin:40px 0 0 40px;
        }
        .second img{
            margin-left:20%;
            width:600px;
        }
        .penk {
            background: #FFB8D6 !important;
        }
        
        .blo {
            background: #D1FFAC !important;
        }
        .bg-warning {
            background: #FFE769 !important;
        }
    </style>
</head>

<body>
        <div class="nav">
            <img src="img/Beige Aesthetic Minimalist Monoline Come visit Logo.png" alt="Logo">
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="logOutUser" value="'$_SESSION['ID']'" class="dropdown-item"> LOGOUT</button>
        </form>
    <div id="form" >
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form mt-4 container card" method="POST">

            <div class="first">
                <div class="row">
                    <!-- HEIGHT -->
                    <div class="col-md-3 mt-4" >
                        <label for="height" >Height</label>
                        <input type="text" class="form-control" id="height" name="height" placeholder="Centimeters" required>
                        
                    </div>
                </div>
                    
                <div class="row">
                    <!--- WEIGHT --->
                    <div class="col-md-3 mt-4" >
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Kilogram" required>
                    </div>
                </div>
                
                <div class="row">
                    <!--- Gender --->
                    <div class="col-md-3 mt-4">
                        <label for="weight">Gender</label>
                    

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="MALE">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="FEMALE">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" id="submitInfo" name="submit_info">UPDATE</button>
            </div>
            <div class="second">
                <img src="img/s-health.png" alt="">
            </div>
            
            <br>
            
            
            
        </form>
    </div>
    <div class="container mb-5" style="margin-left:10%">
        <div class="row">
            <!-- FIRST -->
            <div class="col-md-4">
                <div class="card mt-5 px-3 py-3 bg-warning border" style="width: 20rem;">
                    <img src="img/schedule.png" class="card-img-top" width="auto" height="auto">
                    
                    <div class="text-center">
                        <a href="#">
                            <button class="btn btn-primary" name="" id="">Start Fasting</button>
                        </a>  
                    </div>
                    <!-- <button class="btn btn-primary mt-3">Start Fasting</button> -->
                </div>
            </div>

            <!-- SECOND -->
            <div class="col-md-4">
                <div class="card mt-5 px-2 py-3 penk border" style="width: 20rem;">
                    <img src="img/water.png" class="card-img-top" width="auto" height="240px">
                
                    <div class="text-center">
                        <a href="#">
                            <button class="btn btn-primary" name="" id="">Water Intake</button>
                        </a>  
                    </div>
                            <!-- <button class="btn btn-primary mt-3">Start Fasting</button> -->
                </div>
            </div>

            <!-- THIRD -->
            <div class="col-md-4">
                <div class="card mt-5 px-3 py-3 blo border" style="width: 20rem;">
                    <img src="img/planner.png" class="card-img-top" width="auto" height="240px">
            
                    <div class="text-center">
                        <a href="#">
                            <button class="btn btn-primary" name="" id="">My Plans</button>
                        </a>  
                    </div>
                        <!-- <button class="btn btn-primary mt-3">Start Fasting</button> -->
                </div>
            </div>  
            
        </div>
    </div>  



    
</body>




</html>


