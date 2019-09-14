@extends('layouts.patient')
@section('breadcrumb')
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          
          <li class="breadcrumb-item">
            <a href="{{ route('patient.archive') }}">Archive</a>
          </li>
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
        <div class="row justify-content-center" style="margin-right: 200px; margin-top: 50px; margin-left:50px">
          <div class="col-sm-12 col-xl-12" >
                <div class="card" style="height: 900px; width: 800px" >
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Previous Patient
                    <small>custom content</small>
                  </div>
                  <div class="card-body" id="main" >
                    
                  </div>
                  <div class="card-footer">
                    <nav aria-label="..." style="float: right;">
                      <ul class="pagination">
                        @if ($prescription->prescription_id-1 > 0)
                          {{-- expr --}}
                        <li class="page-item">
                          <a class="page-link" href="{{route('patient.single', [$prescription->prescription_id-1])}}">Previous</a>
                        </li>
                        @endif
                        @if ($prescription->prescription_id < $count)
                          {{-- expr --}}
                        
                        <li class="page-item">
                          <a class="page-link" href="{{route('patient.single', [$prescription->prescription_id+1])}}">Next</a>
                        </li>
                        @endif
                      </ul>
                    </nav>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/pdfobject.min.js')}}"></script>
 <script>
        /*var viewer = $('#viewpdf');
        PDFObject.embed('sample.pdf', viewer);*/
       /*$( document ).ready(function() {*/
          //document.querySelector('.bg-modal').style.display = "flex";
          var viewer = $('#main');
        PDFObject.embed('{{asset('storage/storage')}}/{{$prescription->pdf}}', viewer);
        var x = "{{ $prescription->pdf}}";
        console.log(x);
        //document.querySelector('#main').style.display = "none";
        /*});*/
    </script>
@endsection

