<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>

    <form action="insertStudent.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="age" placeholder="age">
        <button type="submit">Save</button>
    </form>



    <?php foreach($result as $student): ?>
        <li><?php echo $student->getInfo(); ?></li>
    <?php endforeach ?>

</body>
</html>