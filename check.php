    <?php

    $pdo=new PDO('mysql:host=mysql322.phy.lolipop.lan;
    dbname=LAA1554158-shortbbs;charset=utf8',
    'LAA1554158',
    'Pass0602');
    echo 'DB_OPEN<br>';

    $sql=$pdo->prepare('select * from user where username=? and password=?');
    
    $sql->execute([$_POST['username'],$_POST['password']]);
    foreach($sql as $row){
    $name=$row['user_name'];
    }

    if(isset($name)){
            echo '<form action="form.php" method="post"></form>';
    
}else{
    echo 'EmailかPasswordが違います';
    }

    $pdo=null;
    echo '<br>DB_CLOSE <br>';
    ?>
