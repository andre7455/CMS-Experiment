<?php
$title = "New user";
include '../includes/head.php';
?>
<form>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-4">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password123!">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Make account</button>
        </div>
    </div>
</form>
<a href="../index.php" class="btn btn-danger">Back</a>
