<?php require 'partials/header.php' ?>

<div>

    <h3>Task List</h3>
    
    <ul>
        <?php foreach($tasks as $task): ?>

            <?php if($task->completed): ?> 
            
                <li><strike><?= $task->description?></strike></li>

            <?php else: ?>

                <li><?= $task->description?></li>

            <?php endif; ?>

        <?php endforeach; ?>
    </ul>

</div>

<div>

    <h3>Users List</h3>
    
    <ul>
        <?php foreach($users as $user): ?>

            <li><?= $user->name?></li>

        <?php endforeach; ?>
    </ul>

</div>

    <form method="POST" action="names">

            <label for="name">Enter your name</label> <br>
            <input type="text" id="name" name="name">
            <input type="submit" value="Go">
    
    </form>

<?php require 'partials/footer.php'; ?>