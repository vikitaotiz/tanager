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
                                <a href="{{route('reservations.index')}}" class="btn btn-warning btn-sm">All Reservations</a>
                            </div>
                            <div class="col-md-3">
                                <h4 class="card-title">{{$reservation->first_name}} {{$reservation->last_name}}</h4>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('reservations.edit', $reservation->id)}}" class="btn btn-primary btn-sm">Edit Reservation</a>
                            </div>
                            <div class="col-md-3">
                                <form action="{{route('reservations.destroy', $reservation->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Remove Reservation" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                </form>
                            </div>
                        </div><hr>
                    </div>
                    <div class="card-body" style="padding: 2%;">

                        <div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Name : </strong> {{$reservation->first_name}} {{$reservation->last_name}}
                                </li>
                                <li class="list-group-item">
                                    <strong>Phone : </strong> {{$reservation->phone}}
                                </li>
                                @if ($reservation->email)
                                    <li class="list-group-item">
                                        <strong>Email : </strong> {{$reservation->email}}
                                    </li>
                                @endif
                                <li class="list-group-item">
                                    <strong>Date : </strong> {{$reservation->reservation_date->format('d M Y H:i')}}
                                </li>
                                <li class="list-group-item">
                                    <strong>Number of People : </strong> {{$reservation->no_of_people}}
                                </li>
                            </ul>
                        </div>

                        <div class="row" style="padding: 2%;">
                            <p>{{$reservation->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
