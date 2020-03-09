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
                                <h4 class="card-title">All Table Reservations</h4>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="{{route('reservations.create')}}" class="btn btn-primary btn-sm">Create Reservation</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($reservations->count() > 0)
                            <div class="card-body table-full-width table-responsive">
                                <table class="table table-hover table-striped" id="reservations_table">
                                    <thead>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>No. of people</th>
                                        <th>Created On</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservations as $reservation)
                                            <tr>
                                                <td>
                                                    <a href="{{route('reservations.show', $reservation->id)}}">
                                                        {{$reservation->first_name}} {{$reservation->last_name}}
                                                    </a>
                                                </td>
                                                <td>{{$reservation->phone}}</td>
                                                <td>{{$reservation->reservation_date->format('d M Y H:i')}}</td>
                                                <td>{{$reservation->no_of_people}}</td>
                                                <td>#</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <h4 class="card-title">There are no reservations.</h4>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
