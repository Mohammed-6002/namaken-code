<?php
    require 'db.php';
     
    $stmt = $pdo->query("SELECT * FROM informatie");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class= nav>
            <a href="index.php">Home</a>
        </nav>
    </header>
    <main>
    <div class="wrapper">
        <?php foreach ($students as $student): ?>
        <div class="card">
            <div class="card-header">
                <h3><?= $student['klas']; ?></h3>
            </div>
            <div class="card-main">
                <p><?= $student['name']; ?></p>
            </div>
            <div class="card-footer">
                <p><?= $student['degree']; ?></p>
            </div>  
        </div>
        <?php endforeach; ?>
    </div>
    </main>
    <aside>
        <ol>
            <li>item-1</li>
            <li>item-2</li>
            <li>item-3</li>
        </ol>
    </aside>
    <footer>&copy 2025</footer>
</body>
</html>