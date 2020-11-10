<?php require 'partials/header.php'; ?>


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

<?php require 'partials/footer.php'; ?>