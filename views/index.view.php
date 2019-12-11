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
      <li><a href="/">Home</a></li>
      <li><a href="about/culture">About Culture</a></li>
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