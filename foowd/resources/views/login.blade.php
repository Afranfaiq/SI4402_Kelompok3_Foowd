<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/asset/login.css">
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <title>Foowd</title>
</head>
<body class="text-center">
    <span class="border form-signin w-100 m-auto rounded" >
            <form action="{{ route('login.action') }}" method="POST">
            @csrf
                <a href="/">
                    <img class="mb-4" src="../Image/foowd.png" alt="" width="100" height="">
                </a>
                
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <a href="forget password.html" style="text-align: right;">Forget your password?</a>
                <br><br>
            
                </div>
                <button class="w-25 btn btn-book-a-table"  type="button">Log in</button>
                <br><br>
                <a href="login admin.html"><button class="w-25 btn btn-book-a-tables"  type="button">Log in as Admin</button></a>
                </form>
                <br><br>
                <p>
                    Doesn't have any account? <a href="/register">Sign Up</a>
                </p>
    </span>  
</body>