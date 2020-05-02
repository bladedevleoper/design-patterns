<?php

require_once 'classes/Facebook.php';
require_once 'classes/FacebookAdapter.php';

$facebook = new Facebook();

$adapter = new FacebookAdapter($facebook);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Adapter Pattern Practice Example</title>
    <style>
        .bottom{
            margin-bottom: 20px;
        }
    </style>
</head>
    <body>
         <?php foreach ($adapter->getUserPosts('jamesjones21') as $post) : ?>
            <div class="bottom">
                <div>
                    <label>Post Title:</label>
                </div>
                <div>
                    <span><?= $post['title']; ?></span>
                </div>
                <div>
                    <label>Post Date: <i><?= $post['date-posted']; ?></i></label>
                </div>
                <div>
                    <label>Post has <?= $post['comment-count']; ?> comments</label>
                </div>
                <div>
                    <a href="#">See Comments</a>
                </div>
            </div>
        <?php endforeach; ?>
    </body>
</html>
