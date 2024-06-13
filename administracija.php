
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include('header.php')?>
    </header>
    <main class="articles-section">
        <section display='inline-flex'>
        <?php
        include 'config.php';
        $result = $conn->query("SELECT * FROM news ORDER BY created_at DESC");

        if ($result->num_rows > 0):
            while ($news_item = $result->fetch_assoc()): ?>
                <div>
                <form action="update.php" method="POST" class="article">
                    <input type="hidden" name="id" value="<?php echo $news_item['id']; ?>">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="<?php echo htmlspecialchars($news_item['title']); ?>"><br>
                    <label for="summary">Summary:</label>
                    <textarea name="summary"><?php echo htmlspecialchars($news_item['summary']); ?></textarea><br>
                    <label for="content">Content:</label>
                    <textarea name="content"><?php echo htmlspecialchars($news_item['content']); ?></textarea><br>
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Delete</button>
                </form>
            </div>
            <?php endwhile;
        else: ?>
            <p>No news articles found.</p>
        <?php endif; ?>
        </section>
    </main>
    <footer>
        <?php include('footer.php')?>
    </footer>
</body>
</html>
