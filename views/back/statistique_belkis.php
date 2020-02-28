<?php
$connect2 = mysqli_connect("localhost", "root", "", "site_web");
$query2 = "SELECT * FROM commande";
 $result2 = mysqli_query($connect2, $query2);


?>
    
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', 'prix fois quantite'],
                                 <?PHP

 while($row = mysqli_fetch_array($result2))
 {  
    echo "['".$row['id']."',".$row['quantite']*$row['prix']."],";
}

?>
      ]);

      var options = {
        title: '',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'prix fois quantite',
          minValue: 0
        },
        vAxis: {
          title: ' ID prod'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

      chart.draw(data, options);
    }

</script>

<?php
$connect111 = mysqli_connect("localhost", "root", "", "site_web");
$query111 = "SELECT * FROM commande";
 $result111 = mysqli_query($connect111, $query111);


?>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                                <?PHP

 while($row111 = mysqli_fetch_array($result111))
 {  
    echo "['".$row111['id']."',".$row111['quantite']*$row111['prix']."],";
}

?>

        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
        chart.draw(data, options);
      }
    </script>

      
   

