<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet/less" type="text/css" href="style.less" />
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>

</head>
<body>    
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand text-light regbut" href="index.php">Registration</a>
        <a class="navbar-brand text-light regbut" href="list.php">Users</a>

    </div>
    </nav>
    <main>
        <form class="main-form" id="main-form"  method="post">

                <input type="text" id="fname" name="firstname" placeholder=" First Name" required>

                <input type="text" id="lname" name="lastname" placeholder=" Last Name" required>
            
                <input type="email" id="email" name="email" placeholder=" Email Address" required>

                <button type="submit" name="register" id="register" >Register</button>
                

        </form> 
    </main>


    <script>

    $('.main-form').submit(function (e) {
    let data  = $(this).serialize();
    e.preventDefault();
        $.ajax({
    type: "post",
    url: "post.php",
    data: data,
    success: function (response) {
        $('.main-form')[0].reset();
    }
    });

    });

</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>