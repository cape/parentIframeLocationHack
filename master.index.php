<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js" ></script>
    </head>
    <body>
        
        <script type="text/javascript">
            function controlarhash(){
                switch (window.location.hash){
                    case '#color':{
                            window.location.hash='';
                            var r=Math.floor(Math.random()*(255-(0-1))) + 0;
                            var g=Math.floor(Math.random()*(255-(0-1))) + 0;
                            var b=Math.floor(Math.random()*(255-(0-1))) + 0;
                            
                            $('body').css('background-color','rgb('+r+','+g+','+b+')');
                    }
                    case '#font':{
                            window.location.hash='';
                            var r=Math.floor(Math.random()*(255-(0-1))) + 0;
                            var g=Math.floor(Math.random()*(255-(0-1))) + 0;
                            var b=Math.floor(Math.random()*(255-(0-1))) + 0;
                            
                            $('body').css('color','rgb('+r+','+g+','+b+')');
                    }
                    default:{
                       var timer = setTimeout('controlarhash()',100);
                    }
                }
                
            }

            
            
            $(document).ready(function(){
                var timer = setTimeout('controlarhash()',100);
            });
        </script>
        
        <h1> Parent Iframe Location Hack<h1>
                <h3> Que es esto?</h3>   
                    <p>
                        Un script que permite ejecutar codigo en el parent de un iframe obviando las
                        restricciones de dominio
                    </p>
                <h3> Como? </h3>
                    <p>
                        Haciendo uso de las bondades del atributo hash del objeto location.
                    </p>
                    <p>
                        Creando un event listener en el padre que chequee cada x cantidad e tiempo
                        si el hash del location (http://example.com/#hash) ha cambiado, y ejecutando determinado codigo
                        si pasa esto.
                    </p>
                    
                <h3> Ejemplo </h3>
                <iframe src="children.index.php" width="100%" height="100" style='border:0;'></iframe>
                
                <p>
                    la misma logica se puede hacer para ejecutar cosas en el hijo, desde el padre
                </p>
    </body>
</html>
