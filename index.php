<body onload="JavaScript:timedRefresh(15000);"> 
  
<h1> Name : Kotchakorn Somsanong <br> ID : 62100029 </h1>
  
<table style=widht="100%" height="100%">
  <tr>
    <td><h2>RESULT</h2></td>
    <td><h2>LAST UPDATE</h2></td>
  </tr>
  <tr>
    <td> <h3> Humidity </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px"
        src="https://thingspeak.com/channels/1458410/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Humidity"></iframe>
    </td>
    <td>
      <?php
         $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/1/last.txt');
         $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/2/last.txt');
      ?>
         <script type="text/JavaScript">
          function timedRefresh(timeoutPeriod) {
          setTimeout("location.reload(true);",timeoutPeriod);
        }
    </script>
        <h3> <?php echo "Humidity : ".$Temperature ?> %
        <br> <?php echo " Temperature : ".$Humidity ?> °C </h3>
    </td>
    </tr>
    <tr>
        <td><h3> Temperature </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px" 
        src="https://thingspeak.com/channels/1458410/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Temperature"></iframe>
    </td>
    </tr>
    <tr>
    <td><h3> Location </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/maps/channel_show" title="Location"></iframe>
    </td>
    </tr>


</table>
 
</body>
