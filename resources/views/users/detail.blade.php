@extends('layout.main')

@section('content')
        <div class="container-fluid px-4">
            <a class="btn btn-primary my-3" href="{{route('index')}}" role="button"><i class="fa fa-arrow-left"></i></a>
           <!-- Product section-->
            <section class="py-2">
                <h2>Data Diri</h2>
                <section class="py-2">
                    <div class="container px-4 px-lg-5 my-2">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <table class="table">
                                <tbody>
                                    <t{{ $user->name }}r>
                                        <th>Name</th>
                                        <th>:</th>
                                        <th>{{ $user->name }}</th>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <th>{{ $user->email }}</th>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <th>:</th>
                                        <th>{{ $user->address }}</th>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <th>:</th>
                                        <th>0{{ $user->phone }}</th>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <th>:</th>
                                        <th class="{{ ($user->role->name)}}">{{  $user->role->name}}</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a class="btn btn-warning text-black" href="/user/update/{{$user->id}}" role="button">Edit Data Diri</a>
                </section>
            </section>
        </div>
@endsection