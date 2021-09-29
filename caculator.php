<?php
$c="";
$erroa="";
$errob="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a=$_REQUEST["a"];
    $b=$_REQUEST["b"];
    $action = $_POST["action"];//action này ở nơi select mọi người nhé
    if( $a == "" && $b == ""){// check
        $erroa="nhập số a vào bạn ơi";
        $errob="nhập số b vào bạn ơi";
    }
    if( $a && $b){
        if($action == "+"){//gán action=="+"
            $c=(float)$a+(float)$b;
        }
        if($action == "*"){//gán action=="*"
            $c=(float)$a*(float)$b;
        } if($action == "/"){//gán action=="/"
            $c=(float)$a/(float)$b;
        } if($action == "-"){//gán action=="-"
            $c=(float)$a-(float)$b;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="caculator.php" method="POST">
        <input type="text" name="a">
       <p> <?php echo $erroa; ?></p>
        <select name="action" id="">
            <option name="cong" value="+">+</option>
            <option name="tru" value="-">-</option>
            <option name="nhan" value="*">*</option>
            <option  name="chia" value="/">/</option>
        </select>
        <input type="text" name="b">
        <p> <?php echo $errob; ?></p>
        <button type="submit">submit</button>
        <p><?php echo $c;?></p>
    </form>
</body>
</html>