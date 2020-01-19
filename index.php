<?php include 'header.php'; ?>

<main role="main" class="container">
    <div class="row">
        <?php if (!empty($_GET['success'])) {?>
            <div class="alert alert-success" role="alert">
            <?php if ($_GET['success'] == '1') { ?>
                Successfull login!
            <?php } ?>
            <?php if ($_GET['success'] == '2') { ?>
                Successfull logout!
            <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="row">
        <?php if (!empty($_GET['error'])) {?>
            <div class="alert alert-warning" role="alert">
            <?php if ($_GET['error'] == '1') { ?>
                Please enter text in search field 
            <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="row">
    <form class="form-inline" method="POST" action="results.php">
        <div class="form-group mx-sm-3 mb-2">
            <label for="searchbox" class="sr-only">Search</label>
            <input required type="text" name="search_query" class="form-control" id="searchbox" placeholder="Input text here . . .">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
    </div>
</main>

<?php include 'footer.php'; ?>