<?php
include_once 'header.php';
?>

<section class="signup-form">
  <H2>singup</H2>
    <form action="singup.inc.php" method="post">
      <input type="text" name="name" placeholder="full name...">
      <input type="text" name="email" placeholder="email...">
      <input type="text" name="uid" placeholder="username...">
      <input type="password" name="pwd" placeholder="password...">
      <input type="password" name="pwdrepeat" placeholder="repeat password...">
      <button type="submit" name="submit">singup</button>
</section>


    <?php
    include_once 'footer.php';
    ?>