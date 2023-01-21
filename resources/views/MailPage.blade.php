@extends("layout.master")
@section('content')
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 mt-5 bg-light p-5 text-info" style="min-height:300px; border-radius:5px;">
        <form action="/myMail" method="post">
        <h3 class="text-center mb-3">Send Email</h3>
            @csrf
            <!-- From 
            <input type="email" name="from" class="form-control" style="border:none;border-bottom:3px solid #d9d9d9"><br> -->
            Send To
            <input type="email" name="email" class="form-control" style="border:none;border-bottom:3px solid #d9d9d9"><br>
            Subject
            <textarea name="subj" id="" class="form-control" style="border:none;border-bottom:3px solid #d9d9d9"></textarea>
            <br>
            <!-- Composer
            <textarea name="msg" id="" class="form-control" style="border:none;border-bottom:3px solid #d9d9d9"></textarea><br> -->
            <button class="btn btn-info text-white">Send email</button>
        </form>
    </div>
    <div class="col-lg-3"></div>
</div>
<br>
@endsection