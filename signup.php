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
    <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        *{
            margin: 0;
            padding:0;
        }
        main{
            font-family: 'Nunito Sans', sans-serif;
        }
        .pic-1{
            background-image: url('img/intermittent-fasting.png');
            background-repeat: no-repeat;
            -webkit-background-size: 100% auto;
            -moz-background-size: 100% auto;
            -o-background-size: 100% auto;
            background-size: cover;
            background-position: center; 
            height: 100vh; 
        }
        .logo{
            width: 30%
        }
        .text-start p{
            font-weight: bold;
        }
        .form-control {
            width:80%;
        }
        .form{
            padding-left: 120px;
        }
        .form a{
            padding-left:37%;
        }
        .submit{
            text-align: center;
            width: 80%;
            
        }
        .submit button{
            width: 100%;
            color: white;
            background-color: #00750C !important;
        }
       
    </style>
</head>
<body>
    <main>
       
        <div class="row  m-0">
            <!-- Log-in image -->
            <div class="col-6 pic-1 "></div>
            
            <div class="col-6">
                <!-- Logo -->
                <div class="text-center">
                    <img src="img/Beige Aesthetic Minimalist Monoline Come visit Logo.png" alt="LOGO" class="logo py-3">
                </div>
                <!-- Form -->
                <h2 class="fw-bold text-center mb-4">Sign Up</h2>
                <form action="index.php" class="form mt-3 container" method="POST">
                    <div class="mt-3">
                        <label for="name class="text-start">Name</label>
                        <input type="name" class="form-control border border-dark" id="name" name="name" placeholder="Complete Name Here">
                    </div>

                    <div class="mt-3">
                        <label for="password">Email</label>
                        <input type="email" class="form-control  border border-dark" id="email" name="email" placeholder="email@example.com">
                    </div>

                    <div class="mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control border border-dark" id="password" name="password" placeholder="********">
                    </div>

                  
                    
                    <!-- LOGIN BUTTON -->
                    <div class="submit">
                        <button class="btn bg-success mt-4 btn-lg" type="submit" name="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
        

    </main>
    
</body>
</html>