@extends('webadmin.Layout.Layout')
@section('css')
    <link rel="stylesheet" href="/css/bootstrap.min.css" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-datepicker3.min.css" />
    <!--Tablelink-->

    <!-- MetisMenu CSS -->
    <link href="\bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="\dist\css\sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="\bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="\bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="\bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <!-- text fonts -->
    <link rel="stylesheet" href="/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
@endsection
@section('Script')
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- page specific plugin scripts -->
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/jquery.jqGrid.min.js"></script>
    <script src="/js/grid.locale-en.js"></script>

    <!-- ace scripts -->
    <script src="/js/ace-elements.min.js"></script>
    <script src="/js/ace.min.js"></script>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection