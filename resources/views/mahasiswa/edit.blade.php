@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
            <h1>Update Data Mahasiswa</h1>
            @if(session('success'))
            <div class="alert alert-success mt-2" role="alert">
                {{session('success')}}
            </div>
        </div>
        @endif
        <div class="card-body">

            <div class="row">
                <div class="col-lg-6">

                    <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="firstname" placeholder="First Name" value="{{$mahasiswa->first_name}}">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="lastname" placeholder="Last Name" value="{{$mahasiswa->last_name}}">
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
                                <option value="M" @if($mahasiswa->gender == 'M') selected @endif>L</option>
                                <option value="W" @if($mahasiswa->gender =='W') selected @endif>W</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <select class="form-control" name="religion" id="religion">
                                <option value=""></option>
                                <option value="Islam" @if($mahasiswa->religion =='Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if($mahasiswa->religion =='Kristen') selected @endif>Kristen</option>
                                <option value="Katolik" @if($mahasiswa->religion =='Katolik') selected @endif>Katolik</option>
                                <option value="Hindu" @if($mahasiswa->religion =='Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if($mahasiswa->religion =='Buddha') selected @endif>Buddha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" cols="10" rows="2">{{$mahasiswa->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <a href="/mahasiswa" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection