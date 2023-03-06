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
               
        <form id="edditform<?=$task->id ?>" method="POST" action="/edit" >
            <input type="hidden"value="<?= $task->id;?>" name="id">
            
            <input type="submit"value="Edit">
        </form>

        <form method="POST" action="/delete">
            <input type="hidden"value="<?= $task->id;?>" name="id">
            <input type="submit" value="Delete" >
        </form>
            
            </div>    
        <?php endforeach; ?>
    </div>

    <script>
    function edditfunction(id){
       var tasks = document.getElementById('edditform'+id);
       if (tasks.style.display === "none") {
        tasks.style.display = "block";
        } 
        else {
            tasks.style.display = "none";
        }


        var tasks2 = document.getElementById('info'+id);
        if (tasks2.style.display === "none") {
        tasks2.style.display = "block";
        } 
        else {
            tasks2.style.display = "none";
        }
    }

</script>
<?php require_once('partials/footer.php'); ?>