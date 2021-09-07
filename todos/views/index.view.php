<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    
</head>
<body>
    <ul>
        <?php foreach($todos as $todo): ?>
            <?php if($todo->isDone()): ?>
                <li><s><?php echo $todo->title ?></s></li>
                <?php else: ?>
                    <li><?php echo $todo->title; ?></li>
                    <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>