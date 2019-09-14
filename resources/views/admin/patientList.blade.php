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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>NID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($patient as $value)
                                    <tr>
                                        <td style="color: #1f6fb2">{{$value['email']}}</td>
                                        <td><span class="label label-success label-mini">{{$value['phone']}}</span></td>
                                        <td>{{$value['firstname']}}</td>
                                        <td>{{$value['lastname']}}</td>
                                        <td>{{$value['address']}}</td>
                                        <td><span class="label label-warning label-mini">{{$value['nid']}}</span></td>
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
