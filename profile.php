<?php
include 'crud.php';
session_start();
if(!isset($_SESSION['email'])){

    header("Location: index.php");

}
else {
    $email = $_SESSION['email'];
    $read = $obj->Read($email);
    foreach ($read as $re) {
        extract($re);

        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Welcome</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><?php echo $name;?></a></li>


                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
                    <li><a href="singout.php"> singout</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h2>Hello <?php echo $name;?></h2>
            <p>Your basic information is given belows</p>
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $name;?></td>
                    <td><?php echo $mobile;?></td>
                    <td><?php echo $email;?></td>
                </tr>

                </tbody>
            </table>
        </div>


        </body>
        </html>

        <?php
    }
}

?>