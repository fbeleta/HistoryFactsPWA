<?php
session_start();
include 'config.php'; // Include the database connection

if (!isset($_GET['id'])) {
    echo "Article not found.";
    exit;
}

$id = intval($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Article not found.";
    exit;
}

$news_item = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news_item['title']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
        <?php include('header.php')?>
    </header>
    <main>
        <article>
            <h1><?php echo htmlspecialchars($news_item['title']); ?></h1>
            <p><strong>Kategorija:</strong> <?php echo htmlspecialchars($news_item['category']); ?></p>
            <p><strong>Autor:</strong> <?php echo htmlspecialchars($news_item['author']); ?></p>
            <img width='200px' src="./uploads/<?php echo htmlspecialchars($news_item['image']); ?>" alt="Article Image">
            <p><?php echo nl2br(htmlspecialchars($news_item['summary'])); ?></p>
            <p><?php echo nl2br(htmlspecialchars($news_item['content'])); ?></p>
        </article>
    </main>
    
</body>

</html>
