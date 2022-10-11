<?php
if(empty($_COOKIE["lang"])){
    setcookie("lang",$_GET["language"],time()+60);
}
if(isset($_COOKIE["lang"])){
    setcookie("lang",$_GET["language"],time()+60);
}
?>
