<?php require_once('partials/head.php'); ?>

<h1>Home Page</h1>

<!--

<h3>Sisesta ülesanne</h3>
<form method="POST" action="/task">
    <input type="text" name="description">
    <input type="submit" value="Salvesta">
</form>

<ul>
    <?php foreach ( $tasks as $task ): ?>
        <li>

            <?php if ( $task->is_complete ): ?>
                <strike>
            <?php endif; ?>

            <?= $task->description; ?>

            <?php if ( $task->is_complete ): ?>
                </strike>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>
-->

<?php require_once('partials/footer.php'); ?>