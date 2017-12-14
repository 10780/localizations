<?php 
REQUIRE_ONCE “localization.php”;
?>
<html>
<head>
</head>
<body>
<a href=”?locale=en_US”>English</a> |
<a href=”?locale=es_ES”>Spanish</a> |
<a href=”?locale=de_DE”>German</a> |
<a href=”?locale=zh_CH”>Chinese</a> |
<a href=”?locale=ja_JP”>Japanese</a> |
<a href=”?locale=ru_RU”>Russian</a> |
<a href=”?locale=ar_SA”>Arabic</a> 
<br>
<?php echo _(“Hello World!”);?><br>
<p><?php echo _(“My name is”);?>Mr. Bill</p>
</body>
</html>