
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
    <?php 
    $x = array(
        0 => 'Новосибирск' ,
        1 => 'Астрахань' ,
        2 => 'Санкт-Петербург' ,
        3 => 'Екатеринбург' ,
        4 => 'Москва' ,
        5 => 'Нижний Новгород' ,
        6 =>'населения',
    );
    
    ?>
    <?php 
    $g = array(
        0 => 1612833 ,
        1 => 533925 ,
        2 => 5351935 ,
        3 => 1468833 ,
        4 => 12506468 ,
        5 => 1259013 ,
        6 => 0,
    );?>
    <?php
    for ($i = 0;$i<7;$i++):
    ?>
        <table class="a">
        <tr >
            <td class="f"><?php echo $x[$i];?></td>
            <td class="f"><?php echo $g[$i];?></td>
        </tr>
        
        </table>
        <?php $g[6] = $g[6] + $g[$i];?>
<?php endfor;?>
<?php
$a =3;
$b =4;
if($a>$b){
    echo $a;

}
else{
    echo $b;
}

echo $u?>
    
    
    
    </body>
</html>
