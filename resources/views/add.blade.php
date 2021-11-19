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
                            <div class="col-md-6"><h3>Add Books</h3></div>
                            <div class="col-md-6"><a href="dashboard" class="btn btn-success float-right">View Books</a></div>
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
                        <form action="{{'add'}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Book Name:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="detail">Book Details:</label>
                                <!-- <input type="text" class="form-control" name="detail"> -->
                                <textarea class="ckeditor form-control" name="detail"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="publication_year">Publication Year:</label>
                                <input type="date" class="form-control" name="publication_year">
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Image:</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Books</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('includes.script')
