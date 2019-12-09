<html>
   <head>
      <title>Hello World</title>
   </head>
   <style>
      h1{
         background: grey;
         padding: 2em;
         text-align: center;
      }
   </style>
   <body>
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
      </ul>
   </body>
</html>