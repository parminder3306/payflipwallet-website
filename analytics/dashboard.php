<?php
include_once 'session.php';
?>
<!DOCTYPE html>
 <html lang='en-US'>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width = device-width">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="index, follow">
<title>PayflipWallet Analytics</title>
<link rel="stylesheet" href="https://payflipwallet.com/admin/style/style.css" type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://payflipwallet.com/admin/ajax/jquery.js"></script>
<link href="https://payflipwallet.com/admin/style/jquery.bootgrid.css" rel="stylesheet" />
<script src="https://payflipwallet.com/admin/style/bootstrap.min.js"></script>
<script src="https://payflipwallet.com/admin/style/jquery.bootgrid.min.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load('current', {
'packages':['geochart'],
'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);
function drawRegionsMap() {
var data = google.visualization.arrayToDataTable([
['Country', 'Users'],
<?php 
$sql= mysqli_query($sp, "SELECT * FROM country");
while($row = mysqli_fetch_array($sql)){
$country_code=$row['country_code'];
$count=mysqli_query($sp,"select * from online where country_code='$country_code' and token='$token'")->num_rows; ?>
['<?php echo $country_code;?>', <?php echo $count;?>],
<?php } ?>
]);
var options = {};
var chart = new google.visualization.GeoChart(document.getElementById('map'));
chart.draw(data, options);
}
</script>
	 <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?php 
$sql= mysqli_query($sp, "SELECT * FROM devicestype");
while($row = mysqli_fetch_array($sql)){
$device_name=$row['device_name'];
$count=mysqli_query($sp,"select * from online where device_type='$device_name' and token='$token'")->num_rows; ?>
['<?php echo $device_name;?>', <?php echo $count;?>],
<?php } ?>
        ]);

        var options = {
          title: 'Devices',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('devices'));
        chart.draw(data, options);
      }
    </script>
<script>
function online() {
$.getJSON("https://payflipwallet.com/analytics/json", function(response) {
$("#realtime").html(response.realtime);
$("#repeatusers").html(response.repeatusers);
$("#totalusers").html(response.totalusers);
$("#totalonline").html(response.totalonline);
$("#total").html(response.total);
});
}
online();
setInterval('online()',10000);
</script>
</head>
<body>
<div class="header">
<div class="logo">PAYFLIPWALLET<span style="font-size:10px;">ANALYTICS</span></div>
<div class="user">
<a href="javascript:void(0);"><?php echo $webname;?></a>
<div class="user-content">
<a href="https://payflipwallet.com/analytics/delete?token=<?php echo $token;?>">Delete Website</a>
<a href="https://payflipwallet.com/analytics/logout">Log Out</a>
</div>
</div>																			
</div>		
<div class="menu-left">
<a href="https://payflipwallet.com/analytics/dashboard">
<div class="menu-li-active">
<span class="icon fa fa-server"></span>
<div class="menu-left-text">DASHBOARD</div>
</div></a>
<a href="https://payflipwallet.com/analytics/realtime">
<div class="menu-li">
<span class="icon fa fa-support"></span>
<div class="menu-left-text">Real-TIME</div>
</div></a>
<a href="https://payflipwallet.com/analytics/source">
<div class="menu-li">
<span class="icon fa fa-podcast"></span>
<div class="menu-left-text">TRAFFIC-SOURCE</div>
</div></a>
<a href="https://payflipwallet.com/analytics/traffic">
<div class="menu-li">
<span class="icon fa fa-map-marker"></span>
<div class="menu-left-text">All-TRAFFIC</div>
</div></a>
<a href="https://payflipwallet.com/analytics/addwebsite">
<div class="menu-li">
<span class="icon fa fa-plus-circle"></span>
<div class="menu-left-text">Add-WEBSITES</div>
</div></a>
<div class="menu-left-footer">PAYFLIPWALLET ADMIN V1.2</div>
</div>
<div class="card" style="width:19.7%;">
<div class="card-size">
<div class="card-image">
<span class="icon fa fa-signal"></span></div>
<div class="card-text">
<h3 id="totalonline">...</h3></div>
<div class="card-text1">
<a href="javascript:void(0);">
<h3 class="card-font-size">Total Online Users</h3>
</div>
</div>
</div>
<div class="card" style="width:19.7%;">
<div class="card-size">
<div class="card-image">
<span class="icon fa fa-globe"></span></div>
<div class="card-text">
<h3 id="realtime">...</h3></div>
<div class="card-text1">
<a href="javascript:void(0);">
<h3 class="card-font-size">New Online Users</h3>
</div>
</div>
</div>
<div class="card" style="width:19.7%;">
<div class="card-size">
<div class="card-image">
<span class="icon fa fa-exchange"></span></div>
<div class="card-text">
<h3 id="repeatusers">...</h3></div>
<div class="card-text1">
<a href="javascript:void(0);">
<h3 class="card-font-size">Repeat Online Users</h3>
</div>
</div>
</div>
<div class="card" style="width:19.7%;">
<div class="card-size">
<div class="card-image">
<span class="icon fa fa-sliders"></span></div>
<div class="card-text">
<h3 id="totalusers">...</h3></div>
<div class="card-text1">
<a href="javascript:void(0);">
<h3 class="card-font-size">Today Users</h3>
<b class="card-font-size">All Time:<span id="total">0</span></b>
</div>
</div>
</div>
<div class="map-card1">
<div class="map-title1">Users Location Map</div>
<div class="map-body1"><center>
<div id="map" style="width:575px;height:200px;"></div></center>
</div>
</div>
<div class="devices-card1">
<div class="devices-title1">Users Devices Map</div>
<div class="devices-body1"><center>
<div id="devices" style="width:410px;height:200px;"></div></center>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var grid = $("#devicesdetails").bootgrid({
            ajax: true,
            rowSelect: true,
            post: function() {
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },

            url: "onlinedetails.php?token=<?php echo $token;?>",
            formatters: {
                "commands": function(column, row) {
                    return  "";
                }
            }
        });
        var grid = $("#details").bootgrid({
            ajax: true,
            rowSelect: true,
            post: function() {
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },

            url: "onlinedetails.php?token=<?php echo $token;?>",
            formatters: {
                "commands": function(column, row) {
                    return  "";
                }
            }
        });
        });
</script>
<div class="map-card1">
<div class="map-title1">Total Devices</div>
<div class="map-body1">
<table id="devicesdetails" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
<thead>
<tr>
<th data-column-id="number">No.</th>
<th data-column-id="device">Device Name</th>
<th data-column-id="device_type">Device Type</th>
</tr>
</thead>
</table>
</div>
</div>
<div class="devices-card2">
<div class="devices-title2">Total Traffic Locations</div>
<div class="devices-body2">
<table id="details" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
<thead>
<tr>
<th data-column-id="number">No.</th>
<th data-column-id="ip_address">IP ADDRESS</th>
<th data-column-id="city">City</th>
<th data-column-id="country_name">Country</th>
</tr>
</thead>
</table>
</div>
</div>

</body>
</html>