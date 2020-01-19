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
                Wrong username or password!
            <?php } ?>
            <?php if ($_GET['error'] == '4') { ?>
                Wrong username or password!
            <?php } ?>
            </div>
        <?php } ?>
        <?php if (!empty($_GET['success'])) {?>
            <div class="alert alert-success" role="alert">
            <?php if ($_GET['success'] == '1') { ?>
                Successfull registration
            <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="row">
        <form action="user_login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>