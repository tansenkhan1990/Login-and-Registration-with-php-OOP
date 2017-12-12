<!-- Latest compiled and minified CSS -->
<?php

include 'crud.php';
include 'navbar.php';
if(isset($_REQUEST['signup']))
{
    extract($_REQUEST);
    if($obj->insert($name,$email,$password,$mobile))
    {
        $mess='insert successfull';
    }
    else{
        $mess='failed to insert';
    }
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container">
    <br><br>

    <div class="row">
        <center><div class="alert alert-success">
            <strong>Congrats</strong> account create successfully
        </div></center>

        <div class="col-md-6"><form class="form-horizontal" action="index.php">

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputPassword3" placeholder="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-10">
                        <input type="number" name="mobile" class="form-control" id="inputPassword3" placeholder="mobile number" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="signup" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form></div>

        <div class="col-md-6"><form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form></div>
    </div>

</div>
</div>
