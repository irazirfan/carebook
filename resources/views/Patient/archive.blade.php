@extends('layouts.patient')
@section('breadcrumb')
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
@endsection
@section('body')

    <div class="container-fluid">
        <div class="row justify-content-center" style="">
          <div class="col-sm-8 col-xl-8" style="padding-right: 0px; padding-top: 50px" >
              <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Archieve
                    <div class="col-md-4" style="float: right;">
                      <select name="file_type" class="form-control" id="file_type">
                          <option value="prescription">Prescription</option>
                          <option value="report">Report</option>
                        </select>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="list-group">
                      @php
                        $count =0;
                      @endphp
                      @foreach ($prescriptions as $prescription)
                        {{-- expr --}}
                      @if ($count == 0)
                      <a class="list-group-item list-group-item-action flex-column align-items-start active" href="{{route('patient.single', [$prescription->prescription_id])}}">
                      @else
                      <a class="list-group-item list-group-item-action flex-column align-items-start" href="{{route('patient.single', [$prescription->prescription_id])}}">
                      @endif
                        <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">{{$prescription->firstname}}</h5>

                          <small>{{$prescription->date}}</small>
                        </div>          
                      </a>
                      @php
                        $count++;
                      @endphp
                      @endforeach
                    </div>

                    <nav aria-label="..." style="float: right;">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">1
                            <span class="sr-only">(current)</span>
                          </a>
                        </li>
                        <li class="page-item ">
                          <a class="page-link" href="#">2
                            
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
                    <form class="form"  method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="name">Doctor Email</label>
                          <input class="form-control" name="doctor_email" type="text" placeholder="Enter Doctor Email">
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
                          <input id="file-input" type="file" name="file_input">
                        </div>
                      </div>

                      <div class="card-foooter">
                        <button class="btn btn-sm btn-primary" type="submit">
                      <i class="fa fa-dot-circle-o"></i> Upload</button>
                      </div>

                    <!-- /.row-->
                  </form>
                  <div>
                @if($errors->any())
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                @endif
            </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
<script type="text/javascript">
  $('#file_type').on('change',function(){
    $value=$(this).val();
    console.log($value);
    $.ajax({
    type : 'get',
    url : '{{URL::to('patient/archive/search')}}',
    data:{'search':$value},
    success:function(data){
    $('#tbody').html(data);
    }
    });
  })
</script>
<script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection