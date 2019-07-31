@extends('layout.master')
@section('title','Profile')


@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
    <div class="row">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-header">

                    <div class="text-center">

                        <img class="img-profile rounded-circle" alt="avatar" height="120px" width="120px" src="{{asset('images/default.jpeg')}}">
                    </div>
                </div>
                <div class="card-body bg-gray-200 ">
                    <div class="row text-center ">
                        <div class="col-md-4">
                            <div class="">
                                {{$mahasiswa->mapel->count()}}
                            </div>
                            <div class="">
                                Mapel
                            </div>
                        </div>
                        <div class="col-4  ">
                            <h4>mapel</h4>
                        </div>
                        <div class="col-4 ">
                            <h4>mapel</h4>
                        </div>
                    </div>
                </div>

                <div class="card-foot ml-2 mr-2">
                    <!-- <div class="header mt-2 "> -->
                    <h4 class="heading">Profile</h4>
                    <hr class="sidebar-divider d-none d-md-block">
                    <!-- </div> -->
                    <div class="row gutters align-items-center">
                        <div class="col mr-2">
                            Gender </span>
                        </div>
                        <div class="col-auto">
                            <span>{{$mahasiswa->gender}}
                        </div>
                    </div>
                    <div class="row gutters align-items-center">
                        <div class="col mr-2">
                            Religion</span>
                        </div>
                        <div class="col-auto">
                            <span>{{$mahasiswa->religion}}
                        </div>
                    </div>
                    <div class="row gutters align-items-center">
                        <div class="col mr-2">
                            Address</span>
                        </div>
                        <div class="col-auto">
                            <span>{{$mahasiswa->address}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-8">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Mapel</h4>
                </div>
                <div class="card-body">
                    <div class="table-striped">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Semester</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa->mapel as $mapel)
                                <tr>
                                    <th scope="row">{{$loop->iteration }}</th>
                                    <td>{{$mapel->kode}}</td>
                                    <td>{{$mapel->nama}}</td>
                                    <td>{{$mapel->semester}}</td>
                                    <td>{{$mapel->pivot->nilai}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@stop