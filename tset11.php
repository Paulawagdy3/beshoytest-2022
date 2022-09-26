<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script
src="Untitled-1.js" >
    </script>
    <meta http-equiv="refresh" content="">

<body>
    <div></div>
    <form method="post" action="" class="wrapper">
        <input type="text" id="message" name="message">
        <input type="text" name="from">
        <input type="submit" name="Register" value="submit">
    </form>

<div id="autodata"></div>
<?php include ("tset2.php") ?>
</body>

</html>



    
<script>
    $(document).ready(function(){
    setInterval (function(){
    $("#autodata").load("tset2.php");
    refresh();},1000);})    </script>