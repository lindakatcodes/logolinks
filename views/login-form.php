<h3> A simple site to save your favorite links! </h3>

<div style="margin: 25px"></div>

<form action="login.php" method="post">
    <fieldset>
        <div class="form-group">
            <label for="username" class="col-md-12">Username: </label>
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
        <div class="form-group">
            <label for"password" class="col-md-12">Password: </label>
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Log In
            </button>
        </div>
    </fieldset>
</form>
<div>
    Don't have an account yet? <a href="register.php">Register</a> for one here!
</div>
