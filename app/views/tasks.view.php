<?php require_once('partials/head.php'); ?>

<h1>Blog</h1>

<h3>Sisesta Postitus</h3>
<form method="POST" action="/task">
<input type="hidden"value="<?= $task->id;?>" name="id">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <input type="text" name="name" placeholder="name">
    <input type="hidden" name="time" placeholder="time" >
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
               

        <input type="button" value="M" onclick="edditfunction(<?=$task->id ?>)"></input>
        <form method="POST" action="/delete">
            <input type="hidden"value="<?= $task->id;?>" name="id">
            <input type="submit" value="delete" >
        </form>

            </div>    
        <?php endforeach; ?>
    </div>

    <script>
    function edditfunction(id){
       var blogi = document.getElementById('edditform'+id);
       if (blogi.style.display === "none") {
        blogi.style.display = "block";
        } 
        else {
            blogi.style.display = "none";
        }


        var blogi2 = document.getElementById('info'+id);
        if (blogi2.style.display === "none") {
        blogi2.style.display = "block";
        } 
        else {
            blogi2.style.display = "none";
        }
    }

</script>
<?php require_once('partials/footer.php'); ?>