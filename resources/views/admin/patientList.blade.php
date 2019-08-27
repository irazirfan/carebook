@extends('layouts.admin')
@section('content')

    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Patient List</h3>
            <div class="row">
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">

                            <thead>
                            <tr>
                                <th><i class="fa fa-envelope"></i> Email</th>
                                <th class="hidden-phone"><i class="fa fa-mobile"></i> Phone</th>
                                <th><i class=" fa fa-user-circle-o"></i> Name</th>
                                <th><i class=" fa fa-vcard"></i> Address</th>
                                <th><i class=" fa fa-bookmark"></i> NID</th>
                                <th></th>
                                <th><i class=" fa fa-bolt"></i> Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">irazirfan@gmail.com</a>
                                </td>
                                <td class="hidden-phone"><span class="label label-info label-mini">+880 1521318232</span></td>
                                <td>Iraz Irfan</td>
                                <td>Lalmonirhat</td>
                                <td><span class="label label-success label-mini">735 539 2403</span></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">shasan@gmail.com</a>
                                </td>
                                <td class="hidden-phone"><span class="label label-info label-mini">+880 1679332699</span></td>
                                <td>Mahmudul Hasan</td>
                                <td>Comilla</td>
                                <td><span class="label label-success label-mini">639 238 1104</span></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">shahriar@gmail.com</a>
                                </td>
                                <td class="hidden-phone"><span class="label label-info label-mini">+880 1779452668</span></td>
                                <td>Fahim Shahriar</td>
                                <td>Feni</td>
                                <td><span class="label label-success label-mini">954 354 1204</span></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="basic_table.html#">kawser007@hotmail.com</a>
                                </td>
                                <td class="hidden-phone"><span class="label label-info label-mini">+880 1756322584</span></td>
                                <td>Kawser Abid</td>
                                <td>Chittagong</td>
                                <td><span class="label label-success label-mini">452 240 3015</span></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /row -->
        </section>
    </section>

    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->

    </body>

@endsection
