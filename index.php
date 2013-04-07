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
    <link rel="stylesheet" href="css/flexslider.css" />
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
            <a href="#">������</a>
            <a href="#">�� ������</a>
            <a href="#">�������</a>
            <a href="#">����</a>
            <a href="#">��������</a>
            <a href="#">�����</a>
            <a href="#">����������</a>
            <a href="#">'�����</a>
        </nav>
    </header>
    
    <div id="main" class="wrapper">
        <a href="#" class="prosfores">���������</a>
        <section class="slider cf">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="images/slider1.jpg" />
                </li>
                <li>
                  <img src="images/slider2.jpg" />
                </li>
                <li>
                  <img src="images/slider3.jpg" />
                </li>
                <li>
                  <img src="images/slider4.jpg" />
                </li>
                <li>
                  <img src="images/slider5.jpg" />
                </li>
              </ul>
            </div>
        </section>
        
        <section class="massage cf">
            <div>
                <h2>������� <span>������</span> ������� <span>���</span></h2>
                <h3>...�� ������� ������������� ��������� �������� ��� ������� ��� �������������� �� ����� ��� �������� ��� �������� ��������, ������� ��� ������ �����.</h3>
                <p>�������������� ��������� ���������� ������������� ��� ����������� �� ���������� ��� ��������, ��� �������� ��� ������� ����� ������� ��� ������ �������,
                    �������� �� ����� ��������� ��� ��������, ���������� ��� ��� ������� ��� ������� ������� (������������� ��������, ������� ����� ��������,
                    ������� �������� �� ������������, ���� �������. ������ peeling).</p>
            </div>
            <img src="images/massage.jpg" />
        </section>
        
                <section class="columns cf">
            <article>
                <p>����������� ��� ��� ����������� �� ��� ����� ������������ �������� ����� ������������� ���.</p>
                <ul>
                    <li>Endermologie&reg; LPG</li>
                    <li>�� ���������������</li>
                    <li>�� ������� �����</li>
                </ul>
            </article>
            
            <article>
                <p>��� ���������� ��� �������� ���� �������� ��� ������������� ��������� ��������.</p>
                <ul>
                    <li>�������� �� ����� ��� ��������</li>
                    <li>�������� ������������������ ���������</li>
                    <li>�������� �� �����</li>
                </ul>
            </article>
            
            <article>
                <p>����������� ��� ������ ��� ��:</p>
                <ul>
                    <li>����������</li>
                    <li>������������� ��������</li>
                    <li>��������� / ���������� / ������</li>
                    <li>�������� ���������� ����� �� ��������</li>
                    <li>�������������</li>
                </ul>
            </article>
        </section>
        
        <section class="med cf">
            <img src="images/mediterranean.jpg" />
            <p>� ��������� ������ ���� ��� � ��������� ��� �������� �� ���� ��� ����������. ��������� �� ���� ��� ��� ��������� �� relax massage �� ���� ��� ������� �����,
                ���� ��� �� ��������� spa (relax massage �������, ������� �������, ������, ����������������).</p>
            <p>������� ��� ��������� ��� ��� ����� ��� �������, ���� �� ��� ������������, ����� ���� �� �� �������� ��� Mediterranean Diet.</p>
        </section>
    
    </div>
    
    <footer>
        <div class="wrapper cf">
            <section>
                <h4>���� �����������</h4>
                <ul>
                    <li>������� 10 �.�. - 8 �.�.</li>
                    <li>����� 10 �.�. - 8 �.�.</li>
                    <li>������� 10 �.�. - 8 �.�.</li>
                    <li>������ 10 �.�. - 8 �.�.</li>
                    <li>��������� 10 �.�. - 8 �.�.</li>
                    <li>������� 10 �.�. - 3 �.�.</li>
                    <li>������� �������</li>
                </ul>
            </section>
            
            <section>
                <h4>�� ��������� �����</h4>
                <ul>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                </ul>
            </section>
            
            <section>
                <h4>��� �� ��� ������</h4>
                <iframe width="300" height="206" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.gr/maps?f=q&amp;source=s_q&amp;hl=el&amp;geocode=&amp;q=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7&amp;aq=&amp;sll=38.003873,23.882378&amp;sspn=0.006907,0.01369&amp;ie=UTF8&amp;hq=&amp;hnear=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7,+%CE%91%CE%BD%CE%B1%CF%84%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE+%CE%91%CF%84%CF%84%CE%B9%CE%BA%CE%AE&amp;t=m&amp;ll=38.004634,23.880715&amp;spn=0.003483,0.006416&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.gr/maps?f=q&amp;source=embed&amp;hl=el&amp;geocode=&amp;q=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7&amp;aq=&amp;sll=38.003873,23.882378&amp;sspn=0.006907,0.01369&amp;ie=UTF8&amp;hq=&amp;hnear=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7,+%CE%91%CE%BD%CE%B1%CF%84%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE+%CE%91%CF%84%CF%84%CE%B9%CE%BA%CE%AE&amp;t=m&amp;ll=38.004634,23.880715&amp;spn=0.003483,0.006416&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left">������� ����������� �����</a></small>
            </section>
        </div>
        <aside>
            <div class="wrapper cf">2013 &copy; www.kentro-omorfias.gr ������ ���� | ���������� ��� ��������� ����������� <a href="http://www.grigoriap.gr">Grigoria Pontiki</a></div>
        </aside>
    </footer>
    
   <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script   
    
</body>
</html>