<head>
        <link rel="stylesheet" href="PreRequisites/bootstrap-4.6.0-dist/css/bootstrap.css">
        <script type="application/javascript" src="PreRequisites/FontAwesome.js"></script>
        <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>

    <style>
        body{
            background-color:#f9fafe !important;
        }
        .responsive-table li {
            border-radius: 10px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }
        .responsive-table .table-header {
            background-color:#f9fafe !important;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }
        .responsive-table .table-row {
            background-color: #fbfdff;
            box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.1);
        }
        .responsive-table .table-row:hover{
            box-shadow: 0px 0px 9px 0px #1147c1;
        }
        .responsive-table .col-1 {
            flex-basis: 10%;
        }
        .responsive-table .col-2 {
            flex-basis: 40%;
        }
        .responsive-table .col-3 {
            flex-basis: 25%;
        }
        .responsive-table .col-4 {
            flex-basis: 25%;
        }
        .responsive-table .selected{
            background-color:#f3f6fd !important;
        }
        .responsive-table .b{

        }
        .selectedItem{
            background-color: #f3f6fd !important;
        }
        @media all and (max-width: 767px) {
            .responsive-table .table-header {
                display: none;
            }
            .responsive-table li {
                display: block;
            }
            .responsive-table .col {
                flex-basis: 100%;
            }
            .responsive-table .col {
                display: flex;
                padding: 10px 0;
            }
            .responsive-table .col:before {
                color: #6c7a89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
        }




        <!-- check boxes -->
        .checkContainer  {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 5px;
            left: 0;
            height: 15px;
            width: 15px;
            background-color: #e7effc;
        }

        /* On mouse-over, add a grey background color */
        .checkContainer :hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .checkContainer  input:checked ~ .checkmark {
            background-color: #3166e1;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .checkContainer  input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .checkContainer  .checkmark:after   {
            left: 5px;
            top: -2px;
            width: 7px;
            height: 15px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        /* end */
    </style>

</head>
<body>
<div clas="wrapper">
    <div class = "container-fluid p-4">
        <div class="row">
            <div class="col-12 ">
                <span ><h1 class="ml-4">Page Title</h1></span>
                <ul class="responsive-table p-0">
                    <li class="table-header a">
                        <div class="col col-1">
                            <label class="checkContainer">
                                <input type="checkbox" class="d-none">
                                <span class="checkmark"></span>
                            </label><SPAN class="m-1">All</SPAN></div>
                        <div class="col col-4">First Val</div>
                        <div class="col col-4">2nd Val</div>
                        <div class="col col-4">3rd Val</div>
                        <div class="col col-4">4th Val</div>
                    </li>
                    <li class="table-row b">
                        <div class="col col-1">
                            <label class="checkContainer">
                                <input type="checkbox" class="d-none">
                                <span class="checkmark"></span>
                            </label> </div>
                        <div class="col col-4">First Val</div>
                        <div class="col col-4">2nd Val</div>
                        <div class="col col-4">3rd Val</div>
                        <div class="col col-4">4th Val</div>
                    </li>
                    <li class="table-row a">
                        <div class="col col-1">
                            <label class="checkContainer">
                                <input type="checkbox" class="d-none">
                                <span class="checkmark"></span>
                            </label></div>
                        <div class="col col-4">First Val</div>
                        <div class="col col-4">2nd Val</div>
                        <div class="col col-4">3rd Val</div>
                        <div class="col col-4">4th Val</div>
                    </li>
                    <li class="table-row b">
                        <div class="col col-1">
                            <label class="checkContainer">
                                <input type="checkbox" class="d-none">
                                <span class="checkmark"></span>
                            </label></div>
                        <div class="col col-4">First Val</div>
                        <div class="col col-4">2nd Val</div>
                        <div class="col col-4">3rd Val</div>
                        <div class="col col-4">4th Val</div>
                    </li>
                    <li class="table-row a">
                        <div class="col col-1">
                            <label class="checkContainer">
                                <input type="checkbox" class="d-none">
                                <span class="checkmark"></span>
                            </label></div>
                        <div class="col col-4">First Val</div>
                        <div class="col col-4">2nd Val</div>
                        <div class="col col-4">3rd Val</div>
                        <div class="col col-4">4th Val</div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
</body>

<script>
    window.parent.changepage('<?php echo $_SESSION['CurrentSelection'] ?>');
</script>