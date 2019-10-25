<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">

    <title>
        @yield('title', 'Drosophila-Welcome')
    </title>


    <link rel="stylesheet" href="css/app.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/component.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap-table-expandable.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/jquery.magnify.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/jquery.pagination.css" type="text/css" media="all">

    <link rel="stylesheet" href="bootstrap-table/bootstrap-table-master/dist/bootstrap-table.css" type="text/css" media="all">
    <link href="css/jq22.css" type="text/css" rel="stylesheet">
    @yield('css')



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f5f5f5;
            color: #6c757d;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-weight: 100;
            height: 100vh;
            line-height: 2;
            margin: 0;
        }
    </style>
</head>
<body>

<div class="logol-and-nav-bg">
    <!--  register  -->
    <div class="container container_register">
        <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-1"><a class="register_a" href="{{ route('login') }}">Login</a></div>
            <div class="col-sm-1"><a class="register_a" href="{{ route('register') }}">Register</a></div>
            <div class="col-sm-1"></div>
        </div>
    </div>

    <!--  navigation bar  -->
    <div class="container">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link li-navigation" href="/bootstrap/public">Home</a></li>
            <li class="nav-item"><a class="nav-link li-navigation" href="Option">Option</a></li>
            <li class="nav-item"><a class="nav-link li-navigation" href="Statistics">Statistics</a></li>
            <li class="nav-item"><a class="nav-link li-navigation" href="Documentation">Documentation</a></li>
            <li class="nav-item"><a class="nav-link li-navigation" href="Download">Download</a></li>
            <li class="nav-item"><a class="nav-link li-navigation" href="About">About</a></li>
        </ul>
    </div>

    <!--  logol  -->
    <div class="logo-background"></div>
    <div class="container container_register">
        <div class="row">
            <div class="col-sm-12 logo-flex-center ">
                <div class="logo-content">
                    <div id="logo-title" class="logo-title">Drosophila Cistrome Data Browser</div>
                </div>
            </div>
        </div>
    </div>

</div>
<div ><img src="{{URL::asset('/image/pj-5.png')}}"/></div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @yield('content')
        </div>
    </div>
</div>

<div ><img src="{{URL::asset('/image/pj-11.png')}}"/></div>


<!--javascript-->
<script language="JavaScript" src="js/app.js"></script>
<script language="JavaScript" src="js/jquery.min.js"></script>
<!--<script language="JavaScript" src="js/jquery.js"></script>  -->
<script language="JavaScript" src="js/bootstrap-table-expandable.js"></script>
<script language="JavaScript" src="js/classie.js"></script>
<script language="JavaScript" src="js/modalEffects.js"></script>
<script language="JavaScript" src="js/jquery.magnify.js"></script>
<script language="JavaScript" src="bootstrap-table/bootstrap-table-master/dist/bootstrap-table.min.js"></script>
<script language="JavaScript" src="bootstrap-table/bootstrap-table-master/dist/bootstrap-table-locale-all.min.js"></script>
<script language="JavaScript" src="js/jquery.pagination.min.js"></script>
<script language="JavaScript" src="https://unpkg.com/tableexport.jquery.plugin@1.10.1/tableExport.min
.js"></script>


<script>
    $('[data-magnify]').magnify({
        headToolbar: [
            'close'
        ],
        footToolbar: [
            'zoomIn',
            'zoomOut',
            'prev',
            'fullscreen',
            'next',
            'actualSize',
            'rotateRight'
        ],
        title: false
    });
</script>
<script>
    $(function() {
        $("#pagination1").pagination({
            currentPage: 1,
            totalPage: 12,
            callback: function(current) {
                $("#current1").text(current)
            }
        });

        $("#pagination2").pagination({
            currentPage: 3,
            totalPage: 12,
            isShow: false,
            count: 6,
            prevPageText: "< Prev",
            nextPageText: "Next >",
            callback: function(current) {
                $("#current2").text(current)
            }
        });

        $("#pagination3").pagination({
            currentPage: 4,
            totalPage: 16,
            isShow: true,
            count: 7,
            homePageText: "Home",
            endPageText: "Last",
            prevPageText: "Prev",
            nextPageText: "Next",
            callback: function(current) {
                $("#current3").text(current)
            }
        });

        $("#getPage").on("click", function() {
            var info = $("#pagination3").pagination("getPage");
            alert("��ǰҳ����" + info.current + ",��ҳ����" + info.total);
        });

        $("#setPage").on("click", function() {
            $("#pagination3").pagination("setPage", 1, 10);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#content div").hide(); // Initially hide all content
        $("#tabs li:first").attr("id","current"); // Activate first tab
        $("#content div:first").fadeIn(); // Show first tab content

        $('#tabs a').click(function(e) {
            e.preventDefault();
            $("#content div").hide(); //Hide all content
            $("#tabs li").attr("id",""); //Reset id's
            $(this).parent().attr("id","current"); // Activate this
            $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab
        });
    })();
</script>
@yield('script')
</body>
</html>