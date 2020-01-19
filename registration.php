<?php include 'header.php'; ?>

<main role="main" class="container">
    <div class="row">
    <?php if (!empty($_GET['error'])) {?>
        <div class="alert alert-danger" role="alert">
        <?php if ($_GET['error'] == '1') { ?>
            Fill all fields!
        <?php } ?>
        <?php if ($_GET['error'] == '2') { ?>
            Email is not valid. Your email should be ex. 'example@example.com'
        <?php } ?>
        <?php if ($_GET['error'] == '3') { ?>
            Your password doesn't match repeat password!
        <?php } ?>
        <?php if ($_GET['error'] == '4') { ?>
            Your password must be at least 8 characters long!
        <?php } ?>
        <?php if ($_GET['error'] == '5') { ?>
            User with this email address already exists.
        <?php } ?>
        </div>
    <?php } ?>
    </div>
    <div class="row">
        <form action="user_registration.php" method="POST">
            <div class="form-row">
                <div class="col form-group">
                    <label>Name</label>   
                    <input name="name" type="text" class="form-control" placeholder="">
                </div> 
            </div> 
            <div class="form-group">
                <label>Email address</label>
                <input name="email" type="email" class="form-control" placeholder="">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> 
            <div class="form-group">
                <label>Create password</label>
                <input name="password" class="form-control" type="password">
            </div> 
            <div class="form-group">
                <label>Repeat password</label>
                <input name="repeat_password" class="form-control" type="password">
            </div> 
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register  </button>
            </div>      
            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>