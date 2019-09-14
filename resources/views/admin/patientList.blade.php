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
                                        <td>{{$value['email']}}</td>
                                        <td>{{$value['phone']}}</td>
                                        <td>{{$value['firstname']}}</td>
                                        <td>{{$value['lastname']}}</td>
                                        <td>{{$value['address']}}</td>
                                        <td>{{$value['nid']}}</td>
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
