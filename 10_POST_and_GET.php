<?php
/*
$_GET & $_POST:
we can get data through urls and forms using the $_GET and $_POST superglobals.
*/
if(isset($_GET['submit'])){
    echo $_GET['name'];
    echo $_GET['age'];
}
?>

<form actions="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>