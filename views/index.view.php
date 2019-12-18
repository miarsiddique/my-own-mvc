<?php require('partials/header.php'); ?>
   <br>
   <br>
      <?php 
         foreach ($users as $key => $user) : ?>
            <li><?= $user->name?></li>
         <?php endforeach; ?>
   <div>
      <form method="POST" action="/names">
         <input type="text" name="name" placeholder="Enter name"> <br><br>
         <input type="email" name="email" placeholder="Enter email"> <br><br>
         <input type="password" name="password" placeholder="Enter password"> <br><br>
         <input type="submit" value="Save">
      </form>
   </div>
<?php require('partials/footer.php'); ?>
