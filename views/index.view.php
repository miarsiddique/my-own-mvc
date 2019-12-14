<?php require('partials/header.php'); ?>

      <div class="homeClass">
         <ul>
         <?php foreach($tasks as $key => $task) : ?>
            <ul>
               <li>
                  <?php if($task->completed) : ?>
                     <strike>
                        <?= $task->descriptions ?>
                     </strike>
                  <?php else: ?>
                     <?= $task->descriptions ?>
                  <?php endif; ?>
               </li>
            </ul>
         <?php endforeach ?>
      </ul></div>
<?php require('partials/footer.php'); ?>
