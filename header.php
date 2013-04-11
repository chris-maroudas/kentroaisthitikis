<?php     
    function curPageName(){return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);}
    $pageName = curPageName();
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="iso-8859-7" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <link rel="shortcut icon" href="images/favicon.png">
        
    <link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,greek' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed&subset=latin,greek' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,greek' rel='stylesheet' type='text/css'>
        
    <link rel='stylesheet' href='css/reset.css' />
    <link rel='stylesheet' href='css/style.css' />
    <link rel='stylesheet' href='webfontkit/stylesheet.css' />

    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    
    <title>������ ����</title>

</head>

<body>
    
    <div id="top-bar">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="#" class="facebook"></a>
                </li>
                <li>
                    <a href="#" class="twitter"></a>
                </li>
            </ul>
            <a href="tel:694 9736414" class="mobile">�. 694 9736414</a>
            <a href="tel:210 6030864" class="phone">���. 210 6030864</a>
            <address>
                ��������� �' & ��������� 9, ������� 
            </address>
        </div>
    </div>
    
    <header class="wrapper">
        <a href="#" class="logo"></a>
        <nav>
            <a href="index.php" <?php
                        if ($pageName == "index.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >������</a>
            <a href="about_us.php" <?php
                        if ($pageName == "about_us.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >�� ������</a>           
            <a href="face.php" <?php
                        if ($pageName == "face.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >�������</a>
            <a href="body.php" <?php
                        if ($pageName == "body.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >����</a>
            <a href="makeup.php" <?php
                        if ($pageName == "makeup.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >��������</a>
            <a href="nails.php" <?php
                        if ($pageName == "nails.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >�����</a>
            <a href="waxing.php" <?php
                        if ($pageName == "waxing.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >����������</a>
            <a href="articles.php" <?php
                        if ($pageName == "articles.php"){
                            echo "class='active'";
                        }else{
                             echo "class='default'";
                        }
                        ?> >�����</a>
        </nav>
    </header>