<?php require_once('partials/head.php'); ?>

<h1>Blog</h1>

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
               <div class="EDbuttons">
                <form id="edditform<?=$task->id ?>" method="POST" action="/edit">
                    <input type="hidden" value="<?= $task->id;?>" name="id">
                    <input type="hidden" value="<?= $task->title;?>" name="title">
                    <input type="hidden" value="<?= $task->description;?>" name="description">
                    <input type="hidden" value="<?= $task->name;?>" name="name">
                    <input type="submit"value="Edit">
                </form>
                    <form method="POST" action="/delete">
                            <input type="hidden"value="<?= $task->id;?>" name="id">
                            <input type="submit" value="Delete" >
                    </form>
               </div>
           
            
            </div>    
        <?php endforeach; ?>
</div>

<?php require_once('partials/footer.php'); ?>