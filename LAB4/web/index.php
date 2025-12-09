<html>
    <body>  
        <div id='tital'>Hello PHP</div>
        <div id='blog'></div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>  
       document.getElementById("tital").innerHTML='welcome PHP';

       $(function(){}); //jQuery handler

       $(document).ready(function(){
           $('#tital').html('Ready !!');
           $('#blog').load("/page/blog.php");

       });
    </script>

</html>
