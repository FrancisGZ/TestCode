  <?php  include './Verificar.php'; ?>    <!DOCTYPE html>   <html lang="en">     <head>




   <meta charset="utf-8"> 
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <meta name="viewport" content="width=device-width, initial-scale=1">   
   <meta name="description" content="Biofortificación de Granos con Zinc">  

  <meta property="og:image"         content="http://www.fertilab.com.mx/Sitio/img/Notas_Tecnicas/biofortificacion_de_granos_con_zinc.jpg" />
  <meta property="og:url"           content="http://www.fertilab.com.mx/Sitio/Vista/Biofortificacina_in_De_Granos_Con_Zinc.php" />
  <meta property="og:type"          content="website" />
  <!--<meta property="og:title"         content="Fertilab" />
  <meta property="og:description"   content="Analisis de suelos" />-->
 




   <link rel="icon" href="http://www.fertilab.com.mx/Sitio/img/favicon.png"> <title>Biofortificación de Granos con Zinc-Fertilab</title>  <link href="http://www.fertilab.com.mx/Sitio/css/bootstrap.min.css" rel="stylesheet"> <link href="http://www.fertilab.com.mx/Sitio/css/style.css" rel="stylesheet">     <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>   <link href="http://www.fertilab.com.mx/Sitio/css/bootstrap-theme.min.css" rel="stylesheet"> <script src="http://www.fertilab.com.mx/Sitio/js/jquery-1.11.3.min.js"></script> <script src="http://www.fertilab.com.mx/Sitio/js/bootstrap.min.js"></script>  <script src="http://www.fertilab.com.mx/Sitio/js/docs.min.js"></script>   <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script> </head>    <body role="document" class="fondoGris">    <?php if($sesion==1){
         include './Cabecera2.php';  
        }
        else
        {
        include './Cabecera.php';    
        }  
        include '../Controlador/analyticstracking.php';
        include '../../Manager/Controller/funciones.php';
          $nombreNota = basename($_SERVER["PHP_SELF"]); ?>    <section oncontextmenu='return false;' onmousedown='return false;' onselectstart='return false;' onfocus='return false;'>    <h1 class="letraRoja">
              <b>
                Biofortificación de Granos con Zinc

              </b>

<script type="text/javascript">
var dir = window.document.URL;
var dir2 = encodeURIComponent(dir);
var tit = window.document.title;
var tit2 = encodeURIComponent(tit);
</script>

              <div id="fb-root"></div>
<script type="text/javascript">
(function() {
var element = document.createElement('script'); 
element.type = "text/javascript"; 
element.async = true;
element.id = "facebook-jssdk"
element.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
var s = document.getElementsByTagName('script')[0]; 
s.parentNode.insertBefore(element, s);
})();
</script>
<div class="fb-share-button" data-href="" data-width="292" data-send="true" data-layout="button_count"></div>


<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->

<!--
<div class="fb-share-button" data-href="http://www.fertilab.com.mx/Sitio/Vista/Biofortificacina_in_De_Granos_Con_Zinc.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.fertilab.com.mx%2FSitio%2FVista%2FBiofortificacina_in_De_Granos_Con_Zinc.php&amp;src=sdkpreparse">Compartir</a></div>-->

            </h1>
            <br/>  
            <img class="callig center-block img-responsive marco" alt="Biofortificación de Granos con Zinc" src="http://www.fertilab.com.mx/Sitio/img/Notas_Tecnicas/biofortificacion de granos con zinc.jpg" width="300px" height="350px"/>
            </br>   <p class="calligr sesenta"><b>Figura 1. El zinc en la semilla otorga mayor vigor y tolerancia al estrés.</b></p>
            </br>  <h4 class="calligr justificado sesenta">
              <b>  
           En términos generales, la Biofortificación se refiere al enriquecimiento de los granos y leguminosas. Este proceso puede realizarse de dos formas; genéticamente, proceso que recibe el nombre de Biofortificación genética, y la Biofortificación agronómica, la cual consiste en la aplicación de zinc a las semillas, suelo o plantas, en cantidades mayores a las requeridas con el objetivo de maximizar el rendimiento de los cultivos. 
                </b>
            </h4>   
            </br>
            <h4 class="calligr justificado sesenta">
              <b> Hoy en día más de 3 mil millones de personas están siendo afectados por deficiencias de micronutrientes, especialmente de zinc. Esto se debe principalmente a que los alimentos basados en cereales como el trigo, maíz y arroz, contribuyen con casi el 75 % de la ingesta calórica diaria, pero son alimentos que tienen bajas concentraciones de vitaminas, minerales y proteínas. </b>
          </h4>
          </br>
            <h4 class="calligr justificado sesenta">
              <b>Consiste en generar nuevas variedades de cultivos básicos que tengan en sus semillas mayor contenido de zinc y otros nutrientes esenciales para los seres humanos. En definitiva es una estrategia de largo plazo, pero parece ser la más sostenible y rentable.  </b>
             </h4>
            </br>   <?php
             if($sesion==1)
              {
            ?>            
            <h2 class="calligr"><b>¿Deseas Ver la Nota T&eacute;cnica Completa? Descarga <a class="letraRoja" href="http://www.fertilab.com.mx/Sitio/notas/Biofortificación de granos con zinc.pdf" download>Aqu&iacute;</a></b></h2>
            <?php
              }            
            ?>         
            <?php
             if($sesion!=1)
              {
            ?> 
            <h2 class="calligr"><b>¿Deseas Ver la Nota T&eacute;cnica Completa? Suscribete <a class="letraRoja" data-toggle="modal" href="#myModal2">Aqu&iacute;</a> &oacute; <a class="letraRoja" data-toggle="modal" href="#myModal">Inicia Sesi&oacute;n</a></b></h2>

            <?php
              }
            ?>   </section><br/><br/>
        <?php
        include './Login.php';
        include './Registro.php';
        include './ComentariosNotas.php';
        include './cambiarPassword.php';
     include './cerrar-cuenta.php';
        ?> <div class="text-center">
            <?php  include ("./PaginadorNotas.php"); ?>
        </div>
        <?php  include "./Pie.php";  ?>    <script>
            var result = $("#cabecera").height();
            $("body").css({"padding-top": result + 25});
        </script>    <script>
          function mostrar()
           {
            document.getElementById("info");
           }        
        </script>
        </body>






        </html>  <div style="width: 500px; height: 400px; position: relative; bottom: -50px;" class="fondoGris" hidden id="info">
        <div style="width: 500px; height: 50px;">
        <h3 align="center" style="top: 13px; position: relative;"><b>Como Accesar Y Descargar Nota</b></h3> 
        </div>
        <div style="width: 500px; height: 600px;">
        <div style="top: 25px; position: relative">
        <div style=" width:450px; height: 100px; position: relative; left: 25px"> 
        <p style="font-size: 15px; text-align: justify">
           <b>1er Paso.-</b> Si no cuentas con una cuenta, registrate llena los 
                      los campos correspondientes en el formulario recuerda
                      el correo sera tu usuario e ingresa una contrase&#241;a que 
                      recuerdes facilmente.
        </p>
        </div>
        <div style=" width:450px; height: 100px; position: relative; left: 25px"> 
        <p style="font-size: 15px; text-align: justify">
           <b>2do Paso.-</b> Despues de ingresar tus datos da click en "Registrarme"
                      volveras a la pagina principal, despues da click en "Login"
                      e ingresa tu correo y tu contrase&#241;a, listo ya estas logueado,
                      arriba en vez de regisro y login estara "Cuenta".
        </p>
        </div>
        <div style=" width:450px; height: 100px; position: relative; left: 25px">
        <p style="font-size: 15px; text-align: justify">
           <b>3er Paso.-</b> Dirigete a la pesta&#241;a de "Informaci&oacute;n" y da clic en Notas Tecnicas
                      y listo podras descargar la nota dando click en la figura que se 
                      encuentra a un costado de "Ver Mas" o adentro de la nota en la 
                      parte inferior donde dice "Descargar".
        </p>
        </div>
            <button class="btn-success">Siguiente</button>    
        </div>
        </div>
        </div>  