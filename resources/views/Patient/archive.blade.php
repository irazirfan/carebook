@extends('layouts.patient')
@section('breadcrumb')
   <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          
          <li class="breadcrumb-item active">
            <a href="#">Archive</a>
          </li>
          <!-- Breadcrumb Menu-->
          
          <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
              <a class="btn" href="{{route('signout')}}">
                <i class="icon-settings"></i>  Sign-Out</a>
            </div>
          
          </li> 
        </ol>

      </main>
@endsection
@section('body')

    <div class="container">
        <div class="row justify-content-center" style="">
          <div class="col-sm-8 col-xl-8" style="padding-right: 100px; padding-top: 50px" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Archieve
                    <div class="col-md-4" style="float: right;">
                      <select name="file_type" class="form-control">
                        <option>Select File Type</option>
                          <option value="prescription">Prescription</option>
                          <option value="report">Report</option>
                        </select>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Dr. Md.Rezaul Haq</h5>

                          <small>23-Jul-2019</small>
                        </div>          
                      </a>
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Dr. Md.Rezaul Haq</h5>
                          <small>11-June-2019</small>
                        </div>
               
                      </a>
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">Dr. Md.Rezaul Haq</h5>
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
          <div class="col-sm-4 col-xl-4" style="padding-top: 50px;">
            <div class="card">
                  <div class="card-header">
                    Input Prescriptions/Report
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="name">Doctor Name</label>
                          <input class="form-control" name="doctor_name" type="text" placeholder="Enter Doctor name">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="ccnumber">Date</label>
                          <input class="form-control" name="date" type="date" placeholder="0000 0000 0000 0000">
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="form-group col-sm-8">
                        <label for="File Type">File Type</label>
                        <select name="file_type" class="form-control">
                          <option value="prescription">Prescription</option>
                          <option value="report">Report</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-8 " for="file-input">File input</label>
                        <div class="col-sm-8">
                          <input id="file-input" type="file" name="file-input">
                        </div>
                      </div>

                      <div class="card-foooter">
                        <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Upload</button>
                      </div>

                    <!-- /.row-->
                  </div>
                </div>
          </div>
        </div>
      </div>
@endsection