<style>
    body {
        margin: 0;
        padding: 0;
    }
</style><body>
<head>
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
</head>
<iframe id="sidebar" style="width:100%;height:65px;border:0px;" src="TopNavController" name="FraLink"></iframe>
<iframe id="content" src="<?php echo $this->history?>" name="FraDisplay" style="width:100%;height:calc(100% - 67px);border:0px solid black;"></iframe>
</body>
<script>
    function changepage(controllerName){
        window.parent.SideNavRefocus(controllerName);
    }
</script>