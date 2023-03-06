<?php require_once('partials/head.php'); ?>

<div class="Post-Add">
    <h1>Add Post</h1>
    <form method="POST" action="/task">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="name" placeholder="Name">
        <input type="hidden" name="time" placeholder="time" >
        <input type="submit" value="Post">
    </form>
</div>

<?php require_once('partials/footer.php'); ?>