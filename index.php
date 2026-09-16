<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require "book.php";
?>
<?php $user1 = new User('Вася'); ?>
<?php $user2 = new User('petya'); ?>
<?php $user3 = new User('Ivan', 'admin'); ?> 


<?php echo $user1 -> getDescription();?><br>
<?php echo $user2 -> getDescription();?><br>
<?php echo $user3 -> getDescription();?><br>


</body>
</html>
