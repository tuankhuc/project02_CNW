<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <main class="main-login vh-100 w-100 d-flex justify-content-center align-items-center">
        <form class="form w-100">
            <div class="mb-5 d-flex justify-content-center">
                <img src="./assets/img/logo.png" alt="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control form-control-login" required placeholder="Enter Username" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control form-control-login" required placeholder="Enter Password" id="exampleInputPassword1">
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="form-btn btn btn-primary w-100 fw-bold bg-transparent">SIGN IN</button>
        </form>
    </main>
</body>

</html>