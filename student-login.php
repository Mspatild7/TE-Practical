<html>
<head>
    <title>Student Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="css/student-login.css">
    </head>
    <body>
        <form action="student-login-check.php" method="post">
    <div class="container-fluid part1">
        <br><br><br>
        <h1 class="wow flip"><i class="fas fa-user-circle"></i></h1>
        <input type="text" placeholder=" Username...." class="wow flipInY" name="user" required><br>
        <input type="password" placeholder=" Password...." class="wow flipInY" name="pass" required><br>
        <input type="Submit" value="Sign In" class="wow flipInY" name="studentsign">
        <p>Note: &nbsp;If Your forget your username or <br>password please contact to your college...</p>
        </div>
            </form>
    </body>
    <script>
              new WOW().init();
              </script>
    <script>
     window.onload=function()
            {
                document.addEventListener("contextmenu",function(e){e.preventDefault();},false);
            }
               function preback()
            {
                window.history.forward();
            }
          setTimeout("preback()",0);
            window.onunload=function(){null};
           
    </script>
</html>