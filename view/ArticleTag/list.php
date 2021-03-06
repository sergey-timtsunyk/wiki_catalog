<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href="/article_tag/create">Add new record</a><br>
<table border="2">
    <tr>
        <th>
            Tag Name
        </th>
        <th>
            Article Title
        </th>
        <th colspan="2">
            Actions
        </th>
    </tr>
    <?php foreach ([] as $tag) { ?>
        <tr>
            <td>
                <?php echo $tag->getId()?>
            </td>
            <td>
                <?php echo $tag->getName()?>
            </td>
            <td>
                <?php echo $tag->getKey()?>
            </td>
            <td>
                <a href="/article_tag/edit?id=<?php echo $tag->getId()?>">Edit</a>
            </td>
            <td>
                <a href="/article_tag/remove?id=<?php echo $tag->getId()?>">Delete</a>
            </td>

        </tr>
    <?php } ?>
</table>
</body>
</html>
