<html lang="en" oncontextmenu="return false;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="PreRequisites/bootstrap-4.6.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Master/indexCss.css">

    </style>
</head>

<body>
<div class="row mr-0 ml-0">
    <nav id="sidebar" class="col-2 p-0 bg-light" style="overflow:hidden">
        <iframe id="navbar" src="SideNavController" name="FraNav" style="border:0px;width:100%;height:100%;"></iframe>
    </nav>
    <div id="content" class="col p-0">
        <iframe id="content" src="MasterController" name="FraContent" style="border:0px solid black;width:100%;height:100%;"></iframe>
    </div>
</div>




</body>
<script type="application/javascript" src="Master/indexJs.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    function hide(){

            $("#sidebar").toggleClass('active');
    }
</script>


</html>