<?php
session_start();
if(!isset($_SESSION['email'])){

    header("Location: form.php");
}
else
{
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

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome <?php echo $name;?></a>
            </div>

        </div>
    </nav>

    <div class="container">
        <h3>Basic Navbar Example</h3>
        <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
    </div>

    </body>
    </html>
<?php
}
?>