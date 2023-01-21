@extends("layout.Amaster")
@section('Admincontent')
<div class="col-lg-9" style="min-height:670px;">
    <!-- <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-12 mt-3">
                <div class="card">
                    <img src="../images/iccjw.png" style="height:200px;width:100%;">
                </div>
                </div>
    </div> -->

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 bg-light text-info p-5 mt-5">
            <h4 class="text-info text-center mb-4">Insert Image In Gallary</h4>
            <form action="/storeImage" method="post" enctype="multipart/form-data">
            @csrf    
            images
                <input type="file" name="img" class="form-control"><br>
                <button class="btn btn-info">save image</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection