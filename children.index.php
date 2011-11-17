<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js" ></script>
    </head>
    <body>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $('a#color').click(function(){
                   window.parent.location.hash = 'color';
                   return false;
                });
                
                $('a#font').click(function(){
                   window.parent.location.hash = 'font';
                   return false;
                });
                
            
          
            });
        </script>
        <p> dentro del iframe</p>
        <a href="#" id="color">cambiar bg color del padre</a> <br />
        <a href="#" id ="font">cambiar font color del padre</a> <br />
        
        
    </body>
</html>
