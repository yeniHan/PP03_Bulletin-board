<?php
    require '../setup.php';

    $stmt = $connection->prepare("SELECT count(`id`) AS 'id' FROM `help_articles`");
    $stmt->execute();

    $totalArticles = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalArticles = $totalArticles['id'];

    //$newArr => the array to store all articles in a proper order!
    //the order of ancestor articles and their child articles!
    $pgOffset = ($currPage - 1) * $perPage;  // How many to skip to get page.

    $stmt1 = $connection->prepare("
        SELECT
            `sticky`,
            `id`,
            `kind`,
            `password`,
            `numOfChildren`,
            `title`,
            `author_id`,
            `date`,
            `hits`
        FROM `help_articles`
        WHERE `parent_article_id` IS NULL
        ORDER BY `sticky` DESC, `date` DESC
        LIMIT {$perPage} OFFSET {$pgOffset}
        "
    );

    $stmt1->execute();

    $allArticles = $stmt1->fetchAll(PDO::FETCH_ASSOC);

?>