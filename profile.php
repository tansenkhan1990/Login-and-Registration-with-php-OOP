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
                    <li><a href="#" >
                            <div data-toggle="modal" data-target="#myModal">Update profile</div>
                        </a></li>
                    <li><a href="signout.php"> singout</a></li>
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

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">

                        <form action="profile.php">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="email">id:</label>
                                    <input type="text" class="form-control" value="<?php echo $id;?>" disabled>
                                </div>
                                <div class="form-group">

                                    <label for="email">name:</label>
                                    <input type="text" class="form-control" value="<?php echo $name;?>" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">new password:</label>
                                    <input type="password" value="<?php echo $password;?>" class="form-control" id="email">
                                </div>
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" value="<?php echo $email;?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Mobile:</label>
                                <input type="text" class="form-control" value="<?php echo $mobile;?>" id="email">
                            </div>

                            <button type="submit" name="up" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
        </div>

        </div>

        <?php
    }
}

if(isset($_REQUEST['up'])) {
    extract($_REQUEST);
    if ($obj->update($name,$email,$mobile,$password,$id))
    {
        echo "success";
    }
    else{
        echo "faild";
    }
}
?>