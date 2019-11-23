<DATATYPE html>
<HTML>
    <HEAD>
        <TITLE> asignacion a variables </TITLE>
    <meta charset="UTF-8">  
    </HEAD>

    <BODY>
 <?php


function cambioeu ($moneda, $cantidad )
{
 ECHO  "el cambio es de:\n   ". $moneda * $cantidad;
  
}

cambioeu (49, 50);

$x = 144;
$y = 999;

ECHO $x ;
ECHO $y ;





  

	ECHO $_SERVER['HTTP_CLIENT_IP'];


ECHO $_SERVER['REMOTE_ADDR'];

ECHO phpversion();

$ENLACE= 'http://'.$_SERVER['REQUEST_URI'];
echo $ENLACE;
?>
    </BODY>
</HTML>