<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
//Muestra la fecha y hora actual en que el usuario accede a la página.
//Utiliza la función getdate() para obtener la hora, minutos, segundos, día, mes y año, y los muestra en un mensaje formateado.
?>