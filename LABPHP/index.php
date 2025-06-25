<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 
    <?php include "./funzioni.php" ?>
    <?= stampaTitolo('test')?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium delectus a harum expedita fugit, voluptate consequatur laboriosam veritatis aut cupiditate cum provident corporis tenetur. Voluptates voluptatibus distinctio sequi fugiat obcaecati!</p>
    <?= stampaTitolo('test', 3)?>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet doloremque cum cumque nesciunt, commodi accusantium quod, dolor nisi asperiores enim dolorem ipsa sint maxime sit, repellendus veniam rerum laudantium eum.</p>
    <?=  createPar('mio paragtafa'); ?>
    <?= createList(['pane','burrp', 'marmellata']); ?>
</body>

</html>