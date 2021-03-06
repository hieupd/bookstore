@extends('webadmin.Layout.Layout')
@section('title')
	Duyệt sách
@endsection
@section('css')
			<link rel="stylesheet" href="/dist/bootstrap.min.css" />

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
            <style>
                .new-collections-grid1-left p a,.occasion-cart a{
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 10px;
                    color: #D8703F;
                    margin: 0.5em;
                    text-decoration: none;
                    text-transform: uppercase;
                    padding: .5em 1em;
                    border: 1px solid;
                    font-weight: bold;
                }
            </style>
			<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
@endsection
@section('pathofpage')
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="/admin/dashboard/">Trang Chủ</a>
            </li>

            <li>
                <a href="#">Quản Lý</a>
            </li>
            <li class="active">Duyệt Sách </li>
        </ul><!-- /.breadcrumb -->
	</div>
@endsection
@section('contentname')
	<div class="page-header">
		<h1>
			Quản lý sách
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Duyệt sách
			</small>
			<!-- /.nav-search -->
		</h1>

	</div>

@endsection
@section('Content')

                <!-- /.col-lg-12 -->
			@if(session('Thongbao'))
				<div class="alert alert-success">
					{{session('Thongbao')}} </br>
				</div>
			@endif
                <div id="TableContent" >
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>Tên sách</th>
                            <th>Hình ảnh</th>
                            <th>Thể loại</th>
                            <th>Tác giả</th>
                            <th>Nhà xuất bản</th>
                            <th>Nhà cung cấp</th>
                            <th>Số trang</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th width="50px;">Chi tiết</th>
                            <th>Xóa</th>
                            <th>Duyệt</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $b)
                            <tr class="odd gradeX" align="center" id="row{{$b->book_id}}">
                                <td><span>{{$b->book_name}}</span></td>
                                <td><img class="bookimage" src="/upload/book_image/{{$b->book_image}}" width="80px;" height="100px;" ></td>
                                <td><span>{{$b->type_name}}</span></td>
                                <td><span>{{$b->book_author}}</span></td>
                                <td><span>{{$b->book_publish}}</span></td>
                                <td><span>{{$b->book_provider}}</span></td>
                                <td><span>{{$b->book_page}}</span></td>
                                <td><span>{{$b->book_price}}</span></td>
                                <td><span>{{$b->book_quantity}}</span></td>
                                <td style="width: 100px" class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/dashboard/bookmanager/bookdetail/{{$b->book_id}}">Chi tiết</a></td>
                                <td  class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/dashboard/bookmanager/deletebook/{{$b->book_id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <button class="btn-link Accept" id="{{$b->book_id}}">Duyệt</button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
	<script src="/bower_components/jquery.dataTables.min.js"></script>
	<script src="/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script>
        $('#dataTables-example').DataTable({
            responsive: true
        });
        $('document').ready(function () {
            $('.Accept').click(function () {
                var id = $(this).attr('id');
                $.ajax({
                    url:"/admin/dashboard/bookaccept/"+id,
                    type:"get",
                    cache:false,
                    data:
                        {
                            "accept":1
                        },
                    success: function (data) {
                        $('#row'+id).remove();
                    }
                });
            });
        });
	</script>
@endsection
