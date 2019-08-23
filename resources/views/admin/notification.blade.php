@include('../layouts/admin-header')

<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
    @include('../layouts/admin-sidemenu')
    <!-- sidebar menu end-->
    </div>
</aside>

<br> <br> <br>
<div class="container">
    <div class="row justify-content-center" style="margin-left: 50px; margin-top: 50px">
        <div class="col-sm-12 col-xl-12" >
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Notification
                    <small>custom content</small>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Notice Posted By Dr. Md.Rezaul Haq</h5>

                                <small>23-Jul-2019</small>
                            </div>
                        </a>
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Notice Posted By Dr. Md.Rezaul Haq</h5>
                                <small>11-June-2019</small>
                            </div>

                        </a>
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">New Notice Posted By Dr. Md.Rezaul Haq</h5>
                                <small>11-May-2019</small>
                            </div>
                        </a>
                    </div>

                    <nav aria-label="..." style="float: right;">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<footer class="site-footer">
    @include('../layouts/admin-footer')
</footer>
