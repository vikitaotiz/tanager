@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="card-title">Menus</h4>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="{{route('menus.create')}}" class="btn btn-primary btn-sm">Create Menu</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($menus->count() > 0)
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-bordered" id="menus_table">
                                    <thead>
                                        <th>Menu Title</th>
                                        <th>Menu Category</th>
                                        <th>Created By</th>
                                        <th>Created On</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($menus as $menu)
                                            <tr>
                                                <td>
                                                    <a href="{{route('menus.show', $menu->id)}}">
                                                        {{$menu->title}}
                                                    </a>
                                                </td>
                                                <td>{{$menu->categorymenu->title}}</td>
                                                <td>{{$menu->user->name}}</td>
                                                <td>{{$menu->created_at->format('d M Y')}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <h4 class="card-title">There are no menus.</h4>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
