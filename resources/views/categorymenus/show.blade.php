@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('categorymenus.index')}}" class="btn btn-warning btn-sm">All Menu Categories</a>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">{{$categorymenu->title}}</h4>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('categorymenus.edit', $categorymenu->id)}}" class="btn btn-primary btn-sm">Edit Menu Category</a>
                            </div>
                            <div class="col-md-3">
                                <form action="{{route('categorymenus.destroy', $categorymenu->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Remove Menu Category" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                </form>
                            </div>
                        </div><hr>
                    </div>
                    <div class="card-body">

                        <p><strong>Name : </strong>{{$categorymenu->title}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
