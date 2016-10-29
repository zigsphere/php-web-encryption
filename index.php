<?php

?>
<!DOCTYPE>
<html>
<head>
<title>Password Encryption</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="custom-style.css" />
<meta name="description" content="This is a php web-based password encryptor" />
<meta name="keywords" content="Password Encryption, hash, sha256, sha512" />


<script type="text/javascript">
function onLoad(){
	document.getElementById('password').focus();
}
</script>

</head>
<body onload="onLoad()">
<form method="post" action="encrypt.php" target="results" id="password-form">
<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"/>
<input type="submit" name="submit" id="submit" class="form-control" value="Encrypt"/>
</form>

<div id="encryptedpassword">
<iframe src="encrypt.php" name="results" width="100%" height="100%" id="resultframe"/>
</div>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
