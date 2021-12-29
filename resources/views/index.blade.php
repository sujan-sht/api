@include('includes.header')
    
@include('includes.navbar')


<div class="container my-3">
@foreach($products as $list)
    <div class="row my-5">
        <div class="col-md-6">
            <img src="/image/{{ $list->image }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h3>{{$list->name}}</h3>
            <sub>By {{$list->user->name}}, created on {{date('jS M Y',strtotime ($list->updated_at))}}</sub>
            <p>
                {!! Str::limit($list->detail,250) !!}<br>
                <a href="">Read More.</a>
            </p> 
        </div>
    </div>
@endforeach
</div>

<div class="d-flex justify-content-center">
    {{$products->links()}}
</div>

@include('includes.footer')
@include('includes.script')