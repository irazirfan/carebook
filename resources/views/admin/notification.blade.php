@extends('layouts.admin')
@section('content')

    @extends('layouts.admin')
@section('content')


    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Doctor List</h3>
            <div class="row">
                <div class="row mt">
                    <div class="col-md-12">
                        <div class="content-panel">

                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>BMDC No</th>
                                    <th>Degree</th>
                                    <th>Specialized</th>
                                    <th>Consulting</th>
                                    <th>Location</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notification as $value)
                                    <tr>
                                        <td>{{$value['email']}}</td>
                                        <td>{{$value['bmdc']}}</td>
                                        <td>{{$value['degree']}}</td>
                                        <td>{{$value['specialized']}}</td>
                                        <td>{{$value['consulting']}}</td>
                                        <td>{{$value['location']}}</td>
                                        <td>{{$value['contact']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    </body>

@endsection


@endsection
