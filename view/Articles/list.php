<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        td {
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<a href="/article/create">Add new record</a><br>
<a href="/article/upload_url">Upload new record</a>
    <table border="2">
        <tr>
            <th>
                Id
            </th>
            <th>
                Title
            </th>
            <th width="300">
                URL
            </th>
            <th>
                Content
            </th>
            <th colspan="2">
                Actions
            </th>
        </tr>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <td>
                    <?php echo $article->getId()?>
                </td>
                <td>
                    <?php echo $article->getTitle()?>
                </td>
                <td>
                    <?php echo urldecode($article->getUrl())?>
                </td>
                <td>
                    Кол. символов: <?php echo strlen($article->getContent())?>
                </td>
                <td>
                    <a href="/article/edit?id=<?php echo $article->getId()?>">Edit</a>
                </td>
                <td>
                    <a href="/article/remove?id=<?php echo $article->getId()?>">Delete</a>
                </td>
    
            </tr>
        <?php } ?>
    </table>
</body>
</html>
