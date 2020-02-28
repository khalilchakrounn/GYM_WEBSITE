<?php
$connect = mysqli_connect("localhost", "root", "", "site_web");
$query = "SELECT coache,COUNT(coache) as somme FROM coach GROUP BY coache";
 $result = mysqli_query($connect, $query);


?>
    


   
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['City', 'nombre de likes'],
                                 <?PHP

 while($row = mysqli_fetch_array($result))
 {  
    echo "['".$row['coache']."',".$row['somme']."],";
}

?>
      ]);

      var options = {
        title: '',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'NB_Like',
          minValue: 0
        },
        vAxis: {
          title: ' ID_PUB'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

      chart.draw(data, options);
    }


      
    </script>
<?php
$connect1 = mysqli_connect("localhost", "root", "", "site_web");
$query1 = "SELECT coache,COUNT(coache) as somme FROM coach GROUP BY coache";
 $result1 = mysqli_query($connect1, $query1);


?>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                                <?PHP

 while($row1 = mysqli_fetch_array($result1))
 {  
    echo "['".$row1['coache']."',".$row1['somme']."],";
}

?>

        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
        chart.draw(data, options);
      }
    </script>





