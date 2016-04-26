<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <label for"username" class="col-md-12"> Create username: </label>
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <label for"pass1" class="col-md-12"> Create password: </label>
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <label for"pass2" class="col-md-12"> Confirm password: </label>
            <input class="form-control" name="confirmation" placeholder="Confirm password" type="password" />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Register
            </button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a> to your account
</div>
