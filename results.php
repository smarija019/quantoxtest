<?php include 'header.php'; 
include 'db_connection.php';?>

<?php 
    if (!isset($_SESSION['user_name'])) {
        header('Location: login.php');
    }
    if (empty($_POST['search_query'])) {
        header('Location: index.php?error=1');
    }
    $stmt = $conn->prepare("SELECT * from users WHERE email like '%".$_POST['search_query']."%' OR name like '%".$_POST['search_query']."%'");
    $stmt->execute();
    $data = $stmt->fetchAll();
?>


<main role="main" class="container">
    <div class="row">
       
        <?php if(!empty($data)){?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $user) {?>
                    <tr>
                        <td scope="col"><?php echo $user[1]?></td>
                        <td scope="col"><?php echo $user[2]?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php }else {?>
            <div class="alert alert-info" role="alert">
                No users found.
            </div>          
        <?php }?>
    </div>
</main>

<?php include 'footer.php'; ?>