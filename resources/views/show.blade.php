<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} / {{__('Add Books')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">
                        <div class="row mb-3">
                            <div class="col-md-6">{{$product->name}}</div>
                            <div class="col-md-6"><a href="/dashboard" class="btn btn-success float-right">View Books</a></div>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">
                            Name : {{$product->name}}
                            </li>
                            <li class="list-group-item">
                            Detail : {{$product->detail}}
                            </li>
                            <li class="list-group-item">
                            Publication Year : {{$product->publication_year}}
                            </li>
                            <li class="list-group-item">
                            <img src="/image/{{ $product->image }}" width="300px">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('includes.script')
