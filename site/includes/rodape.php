</main>

<footer>Site desenvolvido como exemplo
<div id="current_date"></p>
<script>
document.getElementById("current_date").innerHTML = Date();
</script>

 <?php
 date_default_timezone_set("america/Sao_Paulo");
 $data = date ("d/m/Y H:i");
 ?>

 <p><?=$data?></p>

  

    
</footer>
</body>
</html>