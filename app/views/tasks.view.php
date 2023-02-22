<?php require_once('partials/head.php'); ?>

<h1>Blog</h1>

<h3>Sisesta Postitus</h3>
<form method="POST" action="/task">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="time" placeholder="time">
    <input type="text" name="name" placeholder="name">
    <input type="submit" value="Post">
</form>
<div class="BlogSec">
        <?php foreach ( $tasks as $task ): ?>
            <div class="BlogP">
                <p>
                    <?php if ( $task->title ): ?>
                        <h1 class=blogT><?= $task->title; ?></h1>
                        <?php endif; ?>
                        <p>Description:</p>
                    <?php if ( $task->description ): ?>
                        <p class="BlogTx"><?= $task->description; ?></p>
                        <?php endif; ?>
                        <p>Time:</p>
                    <?php if  ($task->time ): ?>
                        <p class="BlogTx"><?= $task->time; ?></p>
                        <?php endif; ?>
                        <p>Name:</p>
                    <?php if ( $task->name ): ?>
                        <p class="BlogTx"><?= $task->name; ?></p>
                        <?php endif; ?>
                </p>
            </div>    
        <?php endforeach; ?>
    </div>

<?php require_once('partials/footer.php'); ?>