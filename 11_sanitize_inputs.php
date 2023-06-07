<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']); // One way to dodge SQL injection
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    
    echo $name;
    echo $age;
}
?>

<form actions="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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