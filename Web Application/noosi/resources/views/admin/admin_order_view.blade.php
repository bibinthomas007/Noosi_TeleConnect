<!-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

  
    @include('admin.sidebar')

    @include('admin.navbar') -->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
                                    <div style="overflow-x:auto">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Pincode</th>
                                                    <th>Mobileno</th>
                                                    <th align="center">Action</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $product)
                                                <tr>
                                                    
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->email}}</td>
                                                    <td>{{$product->address}}</td>
                                                    <td>{{$product->pin}}</td>
                                                    <td>{{$product->phone}}</td>
                                                    <td><a href="{{url('orders',$product->phone)}}" class="btn btn-primary">View Orders</a></td>
                                               
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    
    <!-- @include('admin.script') -->

    <script src="admin/assets/js/lib/jquery.min.js"></script>
    <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="admin/assets/js/lib/bootstrap.min.js"></script><script src="admin/assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin/assets/js/lib/data-table/datatables-init.js"></script>





</body>

</html>