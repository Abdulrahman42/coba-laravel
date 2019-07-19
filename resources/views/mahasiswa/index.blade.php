<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
</head>

<body>
    <div class="container"> -->
@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h5>Data Mahasiswa</h5>

                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalScrollable">
                        Add data Mahasiswa
                    </button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data_mahasiswa as $mahasiswa)
                        <tr class="text-center">
                            <td></td>
                            <td><a href="/mahasiswa/{{$mahasiswa->id}}/profile"> {{$mahasiswa->first_name}}</a></td>
                            <td><a href="/mahasiswa/{{$mahasiswa->id}}/profile"> {{$mahasiswa->last_name}}</a></td>
                            <td>{{$mahasiswa->gender}}</td>
                            <td>{{$mahasiswa->religion}}</td>
                            <td>{{$mahasiswa->address}}</td>
                            <td> <a class="btn btn-warning btn-sm" href="/mahasiswa/{{$mahasiswa->id}}/edit">Update</a>
                                <a class="btn btn-danger btn-sm tombol-hapus" href="/mahasiswa/{{$mahasiswa->id}}/delete">Delete</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Create Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/mahasiswa/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">last Name</label>
                        <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Last Name">
                    </div>
                    <!-- <div class="form-group">
                            <label for="pesan">Gender</label>
                            <input type="hidden" class="form-control" name="gender" id="gender">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="l" value="L">
                                <label class="form-check-label" for="l">
                                    L
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="p" value="P">
                                <label class="form-check-label" for="p">
                                    P
                                </label>
                            </div>
                        </div> -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value=""></option>
                            <option value="M">M</option>
                            <option value="W">W</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <select class="form-control" name="religion" id="religion">
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="10" rows="2"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @stop
    @section('content1')
    @if(session('success'))
    <div class="alert alert-success mt-2" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-6">
            <h1>Data Mahasiswa</h1>
        </div>
        <div class="col-6 mt-2 ">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalScrollable">
                Add data Mahasiswa
            </button>
        </div>
        <table class="table table-bordered" id="dataTable">
            <tr class="text-center">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach($data_mahasiswa as $mahasiswa)
            <tr class="text-center">
                <td>{{$mahasiswa->first_name}}</td>
                <td>{{$mahasiswa->last_name}}</td>
                <td>{{$mahasiswa->gender}}</td>
                <td>{{$mahasiswa->religion}}</td>
                <td>{{$mahasiswa->address}}</td>
                <td> <a class="btn btn-warning btn-sm" href="/mahasiswa/{{$mahasiswa->id}}/edit">Update</a>
                    <a class="btn btn-danger btn-sm tombol-hapus" href="/mahasiswa/{{$mahasiswa->id}}/delete">Delete</a> </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Create Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/mahasiswa/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">last Name</label>
                        <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Last Name">
                    </div>
                    <!-- <div class="form-group">
                            <label for="pesan">Gender</label>
                            <input type="hidden" class="form-control" name="gender" id="gender">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="l" value="L">
                                <label class="form-check-label" for="l">
                                    L
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="p" value="P">
                                <label class="form-check-label" for="p">
                                    P
                                </label>
                            </div>
                        </div> -->
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value=""></option>
                            <option value="M">M</option>
                            <option value="W">W</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religion</label>
                        <select class="form-control" name="religion" id="religion">
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" cols="10" rows="2"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
    <!-- </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    

</body>

</html> -->