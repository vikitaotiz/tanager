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
                                <h4 class="card-title">Menu Categories</h4>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="{{route('categorymenus.create')}}" class="btn btn-primary btn-sm">Create Menu Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($categorymenus->count() > 0)
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-bordered" id="categorymenus_table">
                                    <thead>
                                        <th>Menu Category Title</th>
                                        <th>Created By</th>
                                        <th>Created On</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorymenus as $categorymenu)
                                            <tr>
                                                <td>
                                                    <a href="{{route('categorymenus.show', $categorymenu->id)}}">
                                                        {{$categorymenu->title}}
                                                    </a>
                                                </td>
                                                <td>{{$categorymenu->user->name}}</td>
                                                <td>{{$categorymenu->created_at->format('d M Y')}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <h4 class="card-title">There are no Menu Categories.</h4>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
