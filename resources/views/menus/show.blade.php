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
                                <a href="{{route('menus.index')}}" class="btn btn-warning btn-sm">All Menus</a>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">{{$menu->title}} : {{$menu->price}}</h4>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('menus.edit', $menu->id)}}" class="btn btn-primary btn-sm">Edit Menu</a>
                            </div>
                            <div class="col-md-3">
                                <form action="{{route('menus.destroy', $menu->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Remove Menu" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                </form>
                            </div>
                        </div><hr>
                    </div>
                    <div class="card-body" style="padding: 2%;">

                        @if ($menu->image)
                            <img src="{{asset('storage/'.$menu->image)}}" alt="{{$menu->title}}" width="100%" height="350">
                        @else
                            <h5>Image not provided</h5>
                        @endif
                        <div class="row" style="padding: 2%;">
                            <p>{{$menu->description}}</p>
                        </div><hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <p><strong>Price : </strong>{{$menu->price}}</p>
                            </div>
                            <div class="col-sm-4">
                                <p><strong>Menu Category : </strong>{{$menu->categorymenu->title}}</p>
                            </div>
                            <div class="col-sm-4">
                                <p><strong>Created By : </strong>{{$menu->user->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
