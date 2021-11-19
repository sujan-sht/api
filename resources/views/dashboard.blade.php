
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">All Books</div>
                            <div class="col-md-6"><a href="add" class="btn btn-success float-right">Add Books</a></div>
                        </div>
                        <table class="table table-bordered mt-4">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <td>S.N</td>
                                    <td>Image</td>
                                    <td>Book Name</td>
                                    <td>Book Details</td>
                                    <td>Publication Year</td>
                                    <td>Action</td>

                                </tr>
                            </thead>
                            
                            <tbody>
                                @isset($products)
                                @foreach($products as $list)
                                <tr class="text-center">
                                    <td>{{$list->id}}</td>
                                    <td><img src="/image/{{ $list->image }}" width="100px"></td>
                                    <td>{{$list->name}}</td>
                                    <td>{!! Str::limit($list->detail,50) !!}</td>
                                    <td>{{$list->publication_year}}</td>
                                    <td>
                                        <a href="show/{{$list->id}}" class="btn btn-warning">Show</a>
                                        <a href="edit/{{$list->id}}" class="btn btn-primary">Edit</a>
                                        <a href="delete/{{$list->id}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                            
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
@include('includes.script')
