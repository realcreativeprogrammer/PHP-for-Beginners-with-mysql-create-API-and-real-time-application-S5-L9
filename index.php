<?php
include './conn.php';

// $sql='INSERT INTO `user`(`email`,`password`) VALUES (?,?)';
// $execute=$pdo->prepare($sql);
// $execute->execute(array('111admin@eemail.commmmmdd','1234md'));
// $pdo=null;

// $sql='SELECT * FROM `user` WHERE user.id=?';
// $sql='SELECT * FROM `user` WHERE user.email=?';
// $sql='SELECT * FROM `user` ORDER BY id DESC';
// $sql='SELECT * FROM `user` ORDER BY email ASC';
// $sql='SELECT * FROM `user` LIMIT 3';


// $sql='UPDATE `user` SET `password`=? WHERE id=?';

$sql='DELETE FROM `user` WHERE id=?';
$exc=$pdo->prepare($sql);
$exc->execute(array(2));

$sql='SELECT * FROM `user`';

$exc=$pdo->prepare($sql);
$exc->execute(array('updated',2));

?>

<table border=1>
    <tr>
        <th>id</th>
        <th>email</th>
    </tr>
    <?php
    while($row = $exc->fetch()){
        echo '<tr><td> '.$row['id'].'</td> <td>'.$row['email'].'</td></tr>';
    }
    ?>
        <tr>
        <th>total</th>
        <th><?php echo $exc->rowCount();?></th>
    </tr>
</table>
