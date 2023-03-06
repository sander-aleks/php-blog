<?php
$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$name=$_POST['name'];
?>

<?php require_once('partials/head.php'); ?>


<div>
    <form method="POST" action="/sedit">
        <p><?= $id ?></p>
        <input type="hidden" value="<?= $id;?>" name="id">
        <input type="text" name="title" placeholder="Title" value="<?= $title ?>">
        <input type="text" name="description" placeholder="Description"  value="<?= $description ?>">
        <input type="text" name="name" placeholder="Name"  value="<?= $name ?>">
        <input type="submit" value="Post">
    </form>
</div>


<?php require_once('partials/footer.php'); ?>