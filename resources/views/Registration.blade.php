@extends('layout.master')
@section('content')
<div class="container-fluid">
    <h2 class="text-info text-center mt-2"><b class="fs-1">S</b>tud<u>ent Registra</u>tion</h2>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 registration_box bg-light text-info fw-bold p-5 m-3">
            <form action="/savaRegister" method="post">
                @csrf
                <!-- @php
                print_r($errors->all());
                @endphp -->
                Enrollment
                <input type="text" name="roll" class="form-control input" value="{{old('roll')}}">
                <span class="text-danger fw-bold">
                    @error('roll')
                    {{$message}}
                    @enderror
                </span>
                <br>
                Name
                <input type="text" name="name" class="form-control input" value="{{old('name')}}">
                <span class="text-danger fw-bold">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
                <br>
                Father's name
                <input type="text" name="fname" class="form-control input" value="{{old('fname')}}">
                <span class="text-danger fw-bold">
                    @error('fname')
                    {{$message}}
                    @enderror
                </span>
                <br>
                Email
                <input type="email" name="email" class="form-control input" value="{{old('email')}}">
                <span class="text-danger fw-bold">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
                <br>
                Mobile
                <input type="mobile" name="mobile" class="form-control input" value="{{old('mobile')}}">
                <span class="text-danger fw-bold">
                    @error('mobile')
                    {{$message}}
                    @enderror
                </span>
                <br>
                Branch
                <select name="branch" class="form-control input">
                    <option>Select Your Branch</option>
                    <option>CS & E</option>
                    <option>IT</option>
                    <option>EE</option>
                    <option>EC</option>
                </select>
                <br>
                Course
                <select name="course" class="form-control input">
                    <option>Select Your Courses</option>
                    <option>diploma</option>
                    <option>Dpharma</option>
                    <option>B.Tech</option>
                    <option>BCA</option>
                    <option>MCA</option>
                </select>
                <br>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection