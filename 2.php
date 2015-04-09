<!DOCTYPE HTML>
<html>
    <head>
        <title>Praxis für Psychosomatische Medizin</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
                <link rel="stylesheet" type="text/css" href="css/sky-forms.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">  
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/jquery.scrollzer.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>  
        <!--[if lt IE 10]>
            <script src="js/jquery.placeholder.min.js"></script>
        <![endif]-->        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/sky-forms-ie8.js"></script>
        <![endif]-->
 
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/sky-forms-ie8.css">
        <![endif]-->
        <script>
            function initialize() {
                  var mapCanvas = document.getElementById('map-canvas');
                  var mapCanvas2 = document.getElementById('map-canvas2');
                  var myLatlng = new google.maps.LatLng(51.95691,7.62742);
                  var myLatlng2 = new google.maps.LatLng(52.2727893,8.0513401);
                  var p1latlng = new google.maps.LatLng(51.95601,7.63133);
                  var p2latlng = new google.maps.LatLng(51.959876,7.6265034);
                  var p3latlng = new google.maps.LatLng(52.2720347,8.0520038);
                  var myStyles =[{      
                  featureType: "poi",
                  elementType: "labels",
                  stylers: [{ visibility: "off" }]}    
            ];
                  var mapOptions = {
                    center: myLatlng,
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false,
                    disableDefaultUI: true,
                    zoomControl: true,
                    scaleControl: true,
                    panControl: false,
                    suppressInfoWindows: true,
                    clickable: false,
                    disableDoubleClickZoom: true,
                    styles: myStyles,          
                    zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL,
              position: google.maps.ControlPosition.TOP_LEFT,}                              
                    } 
                  var mapOptions2 = {
                    center: myLatlng2,
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: false,
                    disableDefaultUI: true,
                    zoomControl: true,
                    scaleControl: true,
                    panControl: false,
                    suppressInfoWindows: true,
                    clickable: false,
                    disableDoubleClickZoom: true,
                    styles: myStyles,          
                    zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL,
              position: google.maps.ControlPosition.TOP_LEFT,}                              
                    }                   
                  var content1 =
                    '<div id="icontent">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Klosterstraße 33/34</h1>'+
                    '<div id="bodyContent1">'+
                    '<p>Hier kann man noch was hinschreiben. ' +
                    '</div>'+
                    '</div>';
                  var content2 =
                    '<div id="icontent">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Parkhaus Engelenschanze</h1>'+
                    '<div id="bodyContent2">'+
                    '<p>Engelstraße 49 <br>48143 Münster</p>' +
                    '</div>'+
                    '</div>';
                  var content3 =
                    '<div id="icontent">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Parkhaus Münster Arkaden</h1>'+
                    '<div id="bodyContent3">'+
                    '<p>Königsstraße 9 <br>48143 Münster</p>' +
                    '</div>'+
                    '</div>';
                  var content4 =
                    '<div id="icontent">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Kollegienwall 3</h1>'+
                    '<div id="bodyContent4">'+
                    '<p>Hier kann man noch was hinschreiben. ' +
                    '</div>'+
                    '</div>';
                  var content5 =
                    '<div id="icontent">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Parkhaus am Landgericht</h1>'+
                    '<div id="bodyContent5">'+
                    '<p>Am Landgericht 3 <br>49074 Osnabrück</p>' +
                    '</div>'+
                    '</div>';          
            var infowindow1 = new google.maps.InfoWindow({
              content: content1
            });
            var infowindow2 = new google.maps.InfoWindow({
              content: content2
            });
            var infowindow3 = new google.maps.InfoWindow({
              content: content3
            });
            var infowindow4 = new google.maps.InfoWindow({
              content: content4
            });
            var infowindow5 = new google.maps.InfoWindow({
              content: content5
            });   
            var map2 = new google.maps.Map(mapCanvas2, mapOptions2);
                  var map = new google.maps.Map(mapCanvas, mapOptions);
                  var Picon = 'images/parking.png';
                  var Picon2 = 'images/parking2.png';
                  var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title:"Klosterstraße 33/34"
            });
            var marker2 = new google.maps.Marker({
              position: myLatlng2,
              map: map2,
              title:"Kollegienwall 3"
            });
            var parken1 = new google.maps.Marker({
              position: p1latlng,
              map: map,
              title:"Parkhaus Engelenschanze",
              icon: Picon
            });
            var parken2 = new google.maps.Marker({
              position: p2latlng,
              map: map,
              title:"Parkhaus Stubengasse",
              icon: Picon
            });
            var parken3 = new google.maps.Marker({
              position: p3latlng,
              map: map2,
              title:"Parkhaus Osna",
              icon: Picon2
            });
            google.maps.event.addListener(map, 'dblclick', function() {
              window.open ("http://goo.gl/6UQPLM","mywindow");
                    });
                    google.maps.event.addListener(map2, 'dblclick', function() {
              window.open ("http://goo.gl/cfUxfS","mywindow");
                    });
                    google.maps.event.addListener(map, 'click', function() {
              infowindow1.close()
              infowindow2.close()
              infowindow3.close()
                    });
                    google.maps.event.addListener(map2, 'click', function() {
              infowindow4.close()
              infowindow5.close()
                    });     
                    google.maps.event.addListener(marker, 'click', function() {
                      infowindow2.close()
                      infowindow3.close()
                      infowindow1.open(map,marker)
                    });
                    google.maps.event.addListener(parken1, 'click', function() {
                      infowindow1.close()
                      infowindow3.close()
                      infowindow2.open(map,parken1)
                    });
                    google.maps.event.addListener(parken2, 'click', function() {
                      infowindow2.close()
                      infowindow1.close()
                      infowindow3.open(map,parken2)
                    });
                    google.maps.event.addListener(marker2, 'click', function() {
                  infowindow5.close()
                      infowindow4.open(map2,marker2)
                    });
                    google.maps.event.addListener(parken3, 'click', function() {
                  infowindow4.close()
                      infowindow5.open(map2,parken3)
                    });
                    google.maps.event.addListener(marker, 'click', function() {
                      map.setCenter(myLatlng)
                    });
                    google.maps.event.addListener(parken1, 'click', function() {
                      map.setCenter(p1latlng)
                    });
                    google.maps.event.addListener(parken2, 'click', function() {
                      map.setCenter(p2latlng)
                    });
                    google.maps.event.addListener(parken3, 'click', function() {
                      map2.setCenter(p3latlng)
                    });     
                    google.maps.event.addListener(marker2, 'click', function() {
                      map2.setCenter(myLatlng2)
                    });             
              }
              google.maps.event.addDomListener(window, 'load', initialize);            
        </script>
  

    </head>
    <body>
        <header id="navbar" class="skel-layers-fixed">
            <nav id="nav">
                <ul>
                    <li><a href="#seite1" id="seite1-link" class="skel-layers-ignoreHref"><span>Start</span></a></li>
                    <li><a href="#seite2" id="seite2-link" class="skel-layers-ignoreHref"><span>Diagnostik</span></a></li>
                    <li><a href="#seite3" id="seite3-link" class="skel-layers-ignoreHref"><span>Behandlung</span></a></li>
                    <li><a href="#seite4" id="seite4-link" class="skel-layers-ignoreHref"><span>Begutachtung</span></a></li>
                    <li><a href="#seite5" id="seite5-link" class="skel-layers-ignoreHref"><span>Vita</span></a></li>
                    <li><a href="#seite6" id="seite6-link" class="skel-layers-ignoreHref"><span>Standorte</span></a></li>
                    <li><a href="#seite7" id="seite7-link" class="skel-layers-ignoreHref"><span>Kontakt</span></a></li>
                </ul>
            </nav>
        </header>
        <!-- Main -->
        <div id="main">
            <section id="seite1" class="one cover">
                <div id ="topbar"></div>
                <!-- Header -->
                <div class="container">
                    <header>
                        <h2 class="alt">Dr. med. Ralph Blunk</a></h2>
                        <p>Psychosomatische Medizin</p>
                        <p>Psychotherapie Psychoanalyse DPG</p>
                        <p>Neurologie und Psychiatrie</p>
                        <p>Stimm-Sprachheilkunde</p>
                        <p>Neuropsychologie</p>
                        <p>Naturheilkunde</p>
                        <p>Medizinischer Sachverständiger cpu</p>
                    </header>
                    <footer>
                    </footer>
                </div>
            </section>
            <!-- Diagnostik -->
            <section id="seite2" class="two">
                <div class="bgj">
                    <div class="container">
                        <header>
                            <h2>Diagnostik</h2>
                        </header>
                        <a href="#" class="image featured"><img src="images/asd5.jpg" alt="" /></a>                             
                        <p>Exploration<br />
                            Neurologische Untersuchung<br />
                            Klinische Testverfahren<br />
                            Leistungstests<br />
                            Neuropsychologische Testung<br />
                            Persönlichkeitsdiagnostik<br />
                            Psychophysiologische Testverfahren<br />
                            Stressdiagnostik<br />
                            Motivations- und Beschwerdevalidierung
                        </p>
                    </div>
                </div>
            </section>
            <!-- Behandlung -->
            <section id="seite3" class="three">
                <div class="bgj">
                    <div class="container">
                        <header>
                            <h2>Behandlung</h2>
                        </header>
                        <a href="" class="image featured"><img src="images/ralph.jpg" alt="" /></a>                         
                        <p>Psychosomatik 
                            Psychotherapie 
                            Psychoanalyse<br />
                            Interdisziplinäre Konsiliartätigkeit 
                            Kurzzeittherapie
                        </p>
                    </div>
                </div>
            </section>
            <!-- Begutachtung -->
            <section id="seite4" class="four">
                <div class="bgj">
                    <div class="container">
                        <header>
                            <h2>Begutachtung</h2>
                        </header>
                        <a href="#" class="image featured"><img src="images/asd5.jpg" alt="" /></a>             
                        <p>Im Auftrag von Gerichten, Privatpersonen und Versicherungen in diversen Rechtsgebieten.<br />
                            Schwerpunkte: Kausalitätsbegutachtung in der gesetzlichen und privaten Unfallversicherung, Soziales Entschädigungsrecht, Zustands- und
                            Leistungsbegutachtung, private Berufsunfähigkeitsversicherung, Rehabilitation, Rentenrecht, Schwerbehindertenrecht. <br />    
                            Bewährte Zusammenarbeit mit Ärzten verschiedener Fachrichtungen. 
                        </p>
                    </div>
                </div>
            </section>
            <!-- Vita -->
            <section id="seite5" class="five">
                <div class ="bgj">
                    <div class="container">
                        <header>
                            <h2>Vita</h2>
                        </header>
                        <p>Promoviert über Störung nichtverbaler Kommunikation bei rechts- und linkshirniger Erkrankung
                            Neuropsychologische Forschungstätigkeit Prof. Hecaen Paris, Prof. Poeck Aachen, Prof. Grüsser Berlin.<br />
                            Eigene neuropsychologische Forschungsprojekte gefördert durch die  DFG.<br /><br />
                            Leitender Oberarzt der Kriseninterventionsstation am Benjamin Franklin Klinikum FU/Psychotherapie traumatisierter Patienten<br />
                            Psychosomatischer Funktionsoberarzt am Benjamin Franklin Klinikum FU<br />
                            Chefarzt eines Akutkrankenhauses für Psychosomatik und Innere Medizin<br />
                            Chefarzt der psychosomatischen Rehaklinik Bad Rothenfelde<br />
                            interdisziplinärer Zusammenarbeit mit der Orthopädie, Schwerpunkt Schmerztherapie.<br /><br />
                            Vielfältige psychotherapeutische Ausbildungen: Gesprächstherapie, Psychoanalyse DPG, Bioenergetik, konzentrative Bewegungstherapie, fundierte Kenntnisse der Verhaltenstherapie.<br /> <br />
                            Seit über 20 Jahren als Gutachter auf den verschiedenen Rechtsgebieten tätig.<br />
                            Postgraduierten-Studium Uni Köln zum Gutachter cpu.<br />
                            Veröffentlichungen im Bereich Neuropsychologie und Psychosomatik
                        </p>
                    </div>
                </div>
            </section>
            <!-- Standorte -->
            <section id="seite6" class="six">
                <div class ="bgj">
                    <div class="container">
                        <header>
                            <h2>Standorte</h2>
                        </header>
                        <p>Doppelklicken Sie auf die Karte für eine detailierte Anfahrt.</p>
                        <h3>Klosterstraße 33/34, 48143 Münster.</h3>
                        <div id="map-canvas"></div>
                        <h3>Kollegienwall 3-4, 49074 Osnabrück</h3>
                        <div id="map-canvas2"></div>
                    </div>
                </div>
            </section>
            <!-- Kontakt -->
            <section id="seite7" class="seven">
                <div class ="bgj">
                    <div class="container">
                        <header>
                            <h2>Kontakt</h2>
                        </header>
                        <p>Telefon Münster: 0177 3590901</br>
                           Telefon Osnabrück: 0541 76099804
                        </p>
            <!-- Formular -->
            <form action="process.php" method="post" id="sky-form" class="sky-form">
                <fieldset>                  
                    <div class="row">
                        <section class="s1">
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" name="name" id="name" placeholder="Name">
                            </label>
                        </section>
                        <section class="s2">
                            <label class="input">
                                <i class="icon-append fa fa-envelope-o"></i>
                                <input type="email" name="email" id="email" placeholder="E-mail">
                            </label>
                        </section>
                    </div>
                    <section>
                        <label class="textarea">
                            <i class="icon-append fa fa-comment"></i>
                            <textarea rows="10" name="message" id="message" placeholder="Nachricht"></textarea>
                        </label>
                    </section>                  
                    <button type="submit" class="button">Senden</button>
                </fieldset>
                <div class="message">
                    <i class="fa fa-check"></i>
                    <p>Danke für Ihre Nachricht. Wir kommen bald auf Sie zurück.</p>
                </div>
            </form>         
        </div>  
        <script type="text/javascript">
            $(function()
            {
                // Validation
                $("#sky-form").validate(
                {                   
                    // Rules for form validation
                    rules:
                    {
                        name:
                        {
                            required: true,
                            minlength: 4
                        },
                        email:
                        {
                            required: true,
                            email: true
                        },
                        message:
                        {
                            required: true,
                            minlength: 10
                        },
                    },
                                        
                    // Messages for form validation
                    messages:
                    {
                        name:
                        {
                            required: 'Bitte geben Sie Ihren Namen an.',
                        },
                        email:
                        {
                            required: 'Bitte geben Sie Ihre E-mail Adresse an.',
                            email: 'Bitte verwenden Sie eine gültige E-mail Adresse.'
                        },
                        message:
                        {
                            required: 'Bitte geben Sie Ihre Nachricht an.'
                        },
                        
                    },
                                        
                    // Ajax form submition                  
                    submitHandler: function(form)
                    {
                        $(form).ajaxSubmit(
                        {
                            beforeSend: function()
                            {
                                $('#sky-form button[type="submit"]').attr('disabled', true);
                            },
                            success: function()
                            {
                                $("#sky-form").addClass('submited');
                            }
                        });
                    },
                    
                    // Do not change code below
                    errorPlacement: function(error, element)
                    {
                        error.insertAfter(element.parent());
                    }
                });
            });         
        </script>
                    </div>
            </section>
        </div>
        <!-- Footer -->
        <div id="footer">
            <div id="btt">
                <a href="#seite1" class="scrolly">&#8679;</a>
            </div>
            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; gutachten-blunk.de 2015</li>
                <li>Design: <a href="http://html5up.net">Jurek Baumann</a></li>
            </ul>
        </div>
    </body>
</html>