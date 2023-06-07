<!-- Show feedbacks -->
<?php include 'config/database.php'; ?>
<?php 
    $sql = 'SELECT * from feedback';
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<?php if(empty($feedback)): ?>
    <p>There is no feedback</p>
<?php endif; ?>

<?php foreach($feedback as $item): ?>
    <div>
        <?php echo $item['feedback']?><br>
        <?php echo $item['name'] ?> on <?php echo $item['date'] ?>
    </div>
<?php endforeach; ?>

<!-- Insert data into database -->
<?php 
    $name = $email = $feedback = '';
    $nameErr = $emailErr = $feedbackErr = '';

    // Form submit
    if(isset($_POST['submit'])) {
        if(empty($_POST['name'])) {
            $nameErr = "Name is required";
        }else {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if(empty($_POST['email'])) {
            $emailErr = "Email is required";
        }else {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }

        if(empty($_POST['feedback'])) {
            $feedbackErr = "Feedback is required";
        }else {
            $feedback = filter_input(INPUT_POST, 'feedback', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if(empty($nameErr) && empty($emailErr) && empty($feedbackErr)) {
            $sql = "INSERT INTO feedback (name, email, feedback) values 
            ('$name', '$email', '$feedback')";

            if(mysqli_query($conn, $sql)) {
                //Success
                header('Location: index.php');
            } else {
                echo 'Error'. mysql_error($conn);
            }
        }
    }
    
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter valid emailID">
        <br>
        <label for="feedback">Feedback:</label>
        <textarea name="feedback"></textarea>
        <br>
        <input type="submit" name="submit" value="Submit"></submit>
    </form>
</body>
</html>