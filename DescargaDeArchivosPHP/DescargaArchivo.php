<?php 

if (!isset($_GET['archivo']) || empty($_GET['archivo'])) {
   exit();
}


 $archivo = basename($_GET['archivo']);
 $ruta = '../Archivos/'.$archivo;


if (is_file($ruta))
{
   header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($ruta));
   ob_end_clean();
   readfile($ruta);
}
else
   exit();


