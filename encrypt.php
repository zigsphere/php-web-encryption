<?php

if(isset($_POST['password'])) $password = $_POST['password'];

?>
<!DOCTYPE>
<html>
<head>
<title>Password Encryption</title>
<link href="custom-style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
  <div id="content">

    <p>
      <?php
      if(isset($password)) foreach (hash_algos() as $v) {
        $r = hash($v, $password, false);
        if(isset($password)) printf("<b><u>%-12s:</u></b> %s<br />", $v, $r);
      }
      ?>
    </p>
  </div>
</body>
</html>
