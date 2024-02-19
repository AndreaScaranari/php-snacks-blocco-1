<?php
$original_paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusamus doloribus nostrum, tenetur rerum quas consectetur odit atque corporis deserunt nesciunt nemo illum facere error, alias perferendis repellat sit? Harum? Similique soluta beatae voluptate minus, delectus vero consectetur dolores repudiandae at excepturi repellendus. Distinctio quo sapiente suscipit sequi officiis cum in quidem repudiandae libero totam esse pariatur quisquam, doloremque commodi. Placeat autem porro ullam maxime quo sequi! Voluptas, id rerum delectus nemo tempore corrupti nisi excepturi cupiditate itaque voluptatem ipsa? Molestias perferendis repellendus doloribus iure eveniet dignissimos delectus optio atque? Exercitationem vitae, dolorum nihil, eum autem eligendi esse, blanditiis earum deserunt ex fuga. Perspiciatis repellendus, harum mollitia assumenda suscipit vero ut deserunt saepe, quidem asperiores voluptatum, dignissimos eligendi culpa sit';
$edited_paragraph = explode('.', $original_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoolForm</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="container">

        <h3 class="py-3">Original Paragraph</h3>
        <p><?= $original_paragraph ?></p>
        
        <h3 class="py-3">Edited Paragraph</h3>
        <ol>
            <?php foreach ($edited_paragraph as $paragraph) : ?> 
                <li>
                    <?php echo $paragraph ?>
                </li> 
            <?php endforeach; ?>
        </ol>
    </main>
</body>

</html>