
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
                                        <td style="color: #1f6fb2">{{$value['email']}}</td>
                                        <td><span class="label label-success label-mini">{{$value['bmdc']}}</span></td>
                                        <td>{{$value['degree']}}</td>
                                        <td>{{$value['specialized']}}</td>
                                        <td><span class="label label-warning label-mini">{{$value['consulting']}}</span></td>
                                        <td>{{$value['location']}}</td>
                                        <td><span class="label label-info label-mini">{{$value['contact']}}</span></td>
                                        <td>
                                            <button onclick="window.location.href = 'accept/{{$value['id']}}';" class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button onclick="window.location.href = 'reject/{{$value['id']}}';" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
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

