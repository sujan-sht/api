@include('includes.header')
<!-- <div class="d-flex justify-content-center"> -->
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-md-6">Edit Book</div>
        <div class="col-md-6"><a href="/dashboard" class="btn btn-success float-right">View Books</a></div>
    </div>

    <!-- displaying error message -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{'/edit/' . $product->id}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$product->id}}">
        </div>
        <div class="form-group">
            <label for="name">Book Name:</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="detail">Book Details:</label>
            <!-- <input type="text" class="form-control" name="detail" value="{{$product->detail}}"> -->
            <textarea class="ckeditor form-control" name="detail">{{$product->detail}}</textarea>

        </div>
        <div class="form-group">
            <label for="publication_year">Publication Year:</label>
            <input type="text" class="form-control" name="publication_year" value="{{$product->publication_year}}">
        </div>
        <div class="form-group">
            <label for="image">Upload Image:</label>
            <input type="file" class="form-control" name="image" >
            <img src="/image/{{ $product->image }}" width="300px">
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
<!-- </div> -->
@include('includes.script')
