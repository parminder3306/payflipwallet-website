<?php
require_once('session.php');
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
<div class="menu-li">
<span class="icon fa fa-server"></span>
<div class="menu-left-text">DASHBOARD</div>
</div></a>
<a href="https://payflipwallet.com/analytics/realtime">
<div class="menu-li">
<span class="icon fa fa-support"></span>
<div class="menu-left-text">Real-TIME</div>
</div></a>
<a href="https://payflipwallet.com/analytics/source">
<div class="menu-li-active">
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
<script type="text/javascript">
    $(document).ready(function() {
        var grid = $("#devices").bootgrid({
            ajax: true,
            rowSelect: true,
            post: function() {
                return {
                    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
                };
            },

            url: "sourcedetails.php?token=<?php echo $token;?>",
            formatters: {
                "commands": function(column, row) {
                    return  "";
                }
            }
        });
        });
		
</script>
<div class="map-card4">
<div class="map-title4">TRAFFIC SOURCE</div>
<div class="map-body4" style="height:auto">
<table id="devices" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
<thead>
<tr>
<th data-column-id="number">No.</th>
<th data-column-id="country_name">Country</th>
<th data-column-id="refer_url">Refer to</th>
<th data-column-id="webpage">Access Page</th>
</tr>
</thead>
</table>
</div>
</div>
</body>
</html>