<a href="DescargaArchivo.php?archivo=Nitrogeno.xlsx" >Nitrogeno a partir de la Materia Organica</a>
<br>
<a href="DescargaArchivo.php?archivo=Convertir ppm de NO3 a Kg de N.xlsx" >Convertir ppm de NO3 a Kg de N</a>

<!--<a href="Descargas.php?archivo=Nitrogeno.xlsx" >Nitrogeno a partir de la Materia Organica</a>-->

<?php



/*
$archivo = basename($_GET['archivo']);
$archivo = "Nitrogeno.xlsx";

 $ruta =  "archivos/".$archivo;

/*if (file_exists($ruta)) {
    echo "El fichero $nombre_fichero existe";
} else {
    echo "El fichero $nombre_fichero no existe";
}*/



/*
if (is_file($ruta))
{
   header('Content-Type: application/force-download');   
   header('Content-Disposition: attachment; filename='.$archivo);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($ruta));
     ob_end_clean();
   readfile($ruta); exit;
}
else
   exit();*/


//$file= './files/archivo.txt';
/*$file= $ruta;
            $filename= basename($file);
            $type = '';
             
            if (is_file($file)) {
                $size = filesize($file);
                if (function_exists('mime_content_type')) {
                    $type = mime_content_type($file);
                } else if (function_exists('finfo_file')) {
                    $info = finfo_open(FILEINFO_MIME);
                    $type = finfo_file($info, $file);
                    finfo_close($info);
                }
                if ($type == '') {
                    $type = "application/force-download";
                }
                // Set Headers
                header("Content-Type: $type");
                header("Content-Disposition: attachment; filename=$filename");
                header("Content-Transfer-Encoding: binary");
                header("Content-Length: " . $size);
                // Download File
                ob_end_clean();
                flush();
                readfile($file);
            } else {
                echo $file.' no es un archivo.';
            }*/
        
?>