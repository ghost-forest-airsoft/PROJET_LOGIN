<?php
setcookie( "lang", "fr", time()+(60*60*24*30));
// Expire dans 30 jours
$_COOKIE["<nom du cookie>"]
$_HTTP_COOKIE_VARS["<nom du cookie>"]
echo $_COOKIE["lang"]. "<br />";
echo $HTTP_COOKIE_VARS["lang"]. "<br />";
if (isset($_COOKIE[" lang "])){
echo $_COOKIE[" lang "]. "<br />";
setcookie( "TestCookie");
setcookie( "TestCookie", "This is a cookie", time()-60);
}
?>
