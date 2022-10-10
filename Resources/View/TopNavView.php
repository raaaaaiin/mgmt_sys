<head>
    <link rel="stylesheet" href="PreRequisites/bootstrap-4.6.0-dist/css/bootstrap.css">
    <script type="application/javascript" src="PreRequisites/FontAwesome.js"></script>

    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
</head>

<nav class="navbar navbar-expand-sm bg-white navbar-light h-100">


<div class="d-flex w-100 justify-content-end align-items-center" >

    <a class="ml-2 navbar-brand mr-auto" id="sidebarCollapse" href="#">
            <i class="fas fa-bars"></i>
        </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Dropdown link
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>
    </ul>
</div>
</nav>
<script>
    $('#sidebarCollapse').click(function() {
        window.parent.parent.hide();
    });
</script>