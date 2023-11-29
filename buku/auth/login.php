<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login Page</title>
    <style>
    .formContainer {
        padding: 24px;
        width: 100%;
        max-width: 320px;
        margin: 0 auto
    }

    .formContainer input {
        height: 48px;
        padding-left: 48px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        color: #fff;
    }

    .btn-accent:active {
        box-shadow: 0px 0px 2px #D62822;
    }

    .formContainer input:focus {
        box-shadow: 0px 0px 2px #D62822;
        background: rgba(255, 255, 255, 0.7);
    }

    .inputLogo {
        position: absolute;
        margin-top: 12px;
        margin-left: 18px;
        color: #fff
    }

    #mainBgn {
        background: url('https://www.wallpaperflare.com/static/615/294/495/artwork-deer-antlers-forest-wallpaper-preview.jpg') no-repeat;
        background-size: cover;
        background-position: center bottom
    }

    .btn-accent {
        background: rgb(214, 40, 34);
        /* Old browsers */
        background: -moz-linear-gradient(top, rgba(214, 40, 34, 1) 0%, rgba(216, 82, 76, 1) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(214, 40, 34, 1) 0%, rgba(216, 82, 76, 1) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(214, 40, 34, 1) 0%, rgba(216, 82, 76, 1) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#d62822', endColorstr='#d8524c', GradientType=0);
        /* IE6-9 */
        height: 48px;
        color: #fff;
        border: none;
    }

    .btn-accent:hover {
        background: rgb(216, 82, 76);
        /* Old browsers */
        background: -moz-linear-gradient(top, rgba(216, 82, 76, 1) 0%, rgba(214, 40, 34, 1) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(216, 82, 76, 1) 0%, rgba(214, 40, 34, 1) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(216, 82, 76, 1) 0%, rgba(214, 40, 34, 1) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#d8524c', endColorstr='#d62822', GradientType=0);
        /* IE6-9 */
        color: #fff;
    }

    ::placeholder {
        color: #ececec !important
    }
    </style>
</head>

<body>
    <div class="vh-100 w-100 d-flex align-items-center" id="mainBgn">
        <div class="formContainer">
            <div class="text-center mb-4 pb-3">
                <h3 class="text-light">Welcome back!</h3>
            </div>
            <form action="" method="post">
                <div>
                    <span class="inputLogo"><i class="fas fa-lock"></i></span><input type="text"
                        class="form-control rounded-pill" name="txtemail" placeholder="mail@email.com">
                </div>
                <div class="my-2">
                    <span class="inputLogo"><i class="fas fa-key"></i></span><input type="password"
                        class="form-control rounded-pill" name="txtpassword" placeholder="password">
                </div>
                <button class="btn btn-accent rounded-pill w-100" name="btnlogin" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php 
require('../setting.php');
if(isset($_POST['btnlogin'])){
    $email =htmlspecialchars($_POST['txtemail']);
    $password = sha1(htmlspecialchars( $_POST['txtpassword']));
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($link,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['email'];
        echo "<script>alert('Sukses ')</script>";
    }else{
        echo "<script>alert('Email or Password is incorrect')</script>";
    }
}
?>