@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <a class="btn btn-primary my-3" href="{{route('index')}}" role="button"><i class="fa fa-arrow-left"></i></a>
           <!-- Product section-->
            <section class="py-2">
                <div class="container px-4 px-lg-5 my-2">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-12">
                            <table>
                            @foreach($user as $u)
                                <tr>
                                    <td>Name</td>
                                    <td>: {{$u['name']}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: {{$u['email']}}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: {{$u['phone']}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: {{$u['address']}}</td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection