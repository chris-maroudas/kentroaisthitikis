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
    
    <title>Ειρήνη Χαλά</title>

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
            <a href="tel:694 9736414" class="mobile">κ. 694 9736414</a>
            <a href="tel:210 6030864" class="phone">τηλ. 210 6030864</a>
            <address>
                Γρηγορίου Ε' & Βυζαντίου 9, Παλλήνη 
            </address>
        </div>
    </div>
    
    <header class="wrapper">
        <a href="#" class="logo"></a>
        <nav>
            <a href="#">Αρχικη</a>
            <a href="#">Το κέντρο</a>
            <a href="#">Πρόσωπο</a>
            <a href="#">Σώμα</a>
            <a href="#">Μακιγιάζ</a>
            <a href="#">Νύχια</a>
            <a href="#">Αποτρίχωση</a>
            <a href="#">'Αρθρα</a>
        </nav>
    </header>
    
    <div id="main" class="wrapper">
        <a href="#" class="prosfores">Προσφορές</a>
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
                <h2>Αλλάξτε <span>εικόνα</span> αλλάξτε <span>ζωή</span></h2>
                <h3>...με σύστημα ολοκληρωμένων θεραπειών προσώπου και σώματος που αντιμετωπίζουν τη φθορά του δέρματος και χαρίζουν ανανέωση, υγρασία και φυσική λάμψη.</h3>
                <p>Εξειδικευμένες θεραπείες αισθητικής κοσμετολογίας που αναστέλλουν τη διαδικασία της γήρανσης, σας χαρίζουν ένα πρόσωπο χωρίς ρυτίδες και λεπτές γραμμές,
                    αυξάνουν το ρυθμό ανάπλασης των κυττάρων, χαρίζοντάς σας ένα λαμπερό και νεανικό πρόσωπο (αντιρυττιδική θεραπεία, λεμφικό μασάζ προσώπου,
                    σύσφιξη προσώπου με μικρορεύματα, οξέα φρούτων. φυτικό peeling).</p>
            </div>
            <img src="images/massage.jpg" />
        </section>
        
                <section class="columns cf">
            <article>
                <p>Απαλλαγείτε από την κυτταρίτιδα με τον πλέον επιστημονικό σύγχρονο τρόπο αντιμετώπισής της.</p>
                <ul>
                    <li>Endermologie&reg; LPG</li>
                    <li>με σταφυλοθεραπεία</li>
                    <li>με λεμφικό μασάζ</li>
                </ul>
            </article>
            
            <article>
                <p>Για ομοιόμορφο και σφριγηλό σώμα ζητείστε τις πρωτοποριακές θεραπείες σύσφιξης.</p>
                <ul>
                    <li>θεραπεία με χρυσό και τζίντζερ</li>
                    <li>θεραπεία ηλεκτροεπιδερμικού ερεθισμού</li>
                    <li>θεραπεία με φύκια</li>
                </ul>
            </article>
            
            <article>
                <p>Ολοκληρώστε την αλλαγή σας με:</p>
                <ul>
                    <li>αποτρίχωση</li>
                    <li>επαγγελματικό μακιγιάζ</li>
                    <li>μανικιούρ / πεντικιούρ / μόνιμο</li>
                    <li>θεραπεία ενυδάτωσης άκρων με παραφίνη</li>
                    <li>ονυχοπλαστική</li>
                </ul>
            </article>
        </section>
        
        <section class="med cf">
            <img src="images/mediterranean.jpg" />
            <p>Ο σύγχρονος τρόπος ζωής και η καθιστική ζωή αλλάζουν το σώμα σας καθημερινά. Χαλαρώστε το σώμα και τις αισθήσεις με relax massage με λάδι και αιθέρια έλαια,
                όπως και με θεραπείες spa (relax massage σώματος, αυχένας σώματος, πλάτης, σοκολατοθεραπεία).</p>
            <p>Χαρείτε τις θεραπείες για τις δικές σας ανάγκες, μέσα σε ένα αδυνατισμένο, υγιές σώμα με τη φροντίδα των Mediterranean Diet.</p>
        </section>
    
    </div>
    
    <footer>
        <div class="wrapper cf">
            <section>
                <h4>Ώρες λειτουργίας</h4>
                <ul>
                    <li>Δευτέρα 10 π.μ. - 8 μ.μ.</li>
                    <li>Τρίτη 10 π.μ. - 8 μ.μ.</li>
                    <li>Τετάρτη 10 π.μ. - 8 μ.μ.</li>
                    <li>Πέμπτη 10 π.μ. - 8 μ.μ.</li>
                    <li>Παρασκευή 10 π.μ. - 8 μ.μ.</li>
                    <li>Σάββατο 10 π.μ. - 3 μ.μ.</li>
                    <li>Κυριακή κλειστά</li>
                </ul>
            </section>
            
            <section>
                <h4>Τα τελευταία άρθρα</h4>
                <ul>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                    <li><a href="#">Gummi bears oat cake applicake wypas cake tiramisu.</a></li>
                </ul>
            </section>
            
            <section>
                <h4>Πού θα μας βρείτε</h4>
                <iframe width="300" height="206" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.gr/maps?f=q&amp;source=s_q&amp;hl=el&amp;geocode=&amp;q=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7&amp;aq=&amp;sll=38.003873,23.882378&amp;sspn=0.006907,0.01369&amp;ie=UTF8&amp;hq=&amp;hnear=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7,+%CE%91%CE%BD%CE%B1%CF%84%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE+%CE%91%CF%84%CF%84%CE%B9%CE%BA%CE%AE&amp;t=m&amp;ll=38.004634,23.880715&amp;spn=0.003483,0.006416&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.gr/maps?f=q&amp;source=embed&amp;hl=el&amp;geocode=&amp;q=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7&amp;aq=&amp;sll=38.003873,23.882378&amp;sspn=0.006907,0.01369&amp;ie=UTF8&amp;hq=&amp;hnear=%CE%92%CF%85%CE%B6%CE%B1%CE%BD%CF%84%CE%AF%CE%BF%CF%85+9,+%CE%A0%CE%B1%CE%BB%CE%BB%CE%AE%CE%BD%CE%B7,+%CE%91%CE%BD%CE%B1%CF%84%CE%BF%CE%BB%CE%B9%CE%BA%CE%AE+%CE%91%CF%84%CF%84%CE%B9%CE%BA%CE%AE&amp;t=m&amp;ll=38.004634,23.880715&amp;spn=0.003483,0.006416&amp;z=16&amp;iwloc=A" style="color:#0000FF;text-align:left">Προβολή μεγαλύτερου χάρτη</a></small>
            </section>
        </div>
        <aside>
            <div class="wrapper cf">2013 &copy; www.kentro-omorfias.gr Ειρήνη Χαλά | σχεδιασμός και κατασκευή ιστοσελίδας <a href="http://www.grigoriap.gr">Grigoria Pontiki</a></div>
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