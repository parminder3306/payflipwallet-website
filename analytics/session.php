<?php
session_start();
$token=false;
$webname=false;
include_once("../admin/auth/db.php");
$sql = mysqli_query($sp, "select * from admin where access='Yes'");
$data = mysqli_fetch_assoc($sql);
if ($data['website']=='OFF') {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Oops! Something went wrong</title>

        <style type="text/css">
            html {
                font-family: sans-serif;
                line-height: 1.15;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%
            }
            
            html,
            body {
                width: 100%;
                height: 100%;
                background-color: #fff
            }
            
            body {
                color: #ff6347;
                text-align: center;
                padding: 0;
                margin: 0;
                min-height: 100%;
                display: table;
                font-family: "Open Sans", Arial, sans-serif
            }
            
            .lead {
                color: grey;
                font-size: 21px;
                line-height: 1.4
            }
            
            .container {
                display: table-cell;
                vertical-align: middle;
                padding: 0 20px
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>500 Server error</h2>
            <p>Please wait few mintus</p>
        </div>
    </body>

    </html>
    <?php
exit;
}
?>
<?php	
if(!isset($_SESSION['analytics-session']))
{
	header("Location:https://payflipwallet.com/analytics/");
}else{
$query = "select * from analytics where token='".$_SESSION['analytics-session']."'";
$result = mysqli_query($sp,$query);
$row = mysqli_fetch_array($result);
$webname=$row['website'];
$token=$row['token'];
}
?>