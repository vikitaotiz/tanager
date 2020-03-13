@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">Dashboard <hr></div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-4">
                           <div class="card bg-primary" style="color: #fff;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <strong style="font-size: 2em;">Users</strong>
                                        </div>

                                        <div class="col-6">
                                            <i class="nc-icon nc-circle-09" style="font-size: 5em;"></i>
                                        </div>

                                    </div><hr>
                                    <div class="row">
                                        <strong style="margin-right: 15%; margin-left: 3%;">No. of Users : {{$users->count()}}</strong>

                                        <a href="{{route('users.index')}}">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card bg-success" style="color: #fff;">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-8">
                                             <strong style="font-size: 2em;">Table Reservations Made Today</strong>
                                         </div>

                                         <div class="col-4">
                                             <i class="nc-icon nc-paper-2" style="font-size: 5em;"></i>
                                         </div>

                                     </div><hr>
                                     <div class="row">
                                         <strong style="margin-right: 15%; margin-left: 3%;">
                                            No. of Reservations : {{$reservations_today->count()}}
                                        </strong>

                                         <a href="{{route('reservations.index')}}">More Info</a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card bg-success" style="color: #fff;">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-8">
                                             <strong style="font-size: 2em;">All Table Reservations</strong>
                                         </div>

                                         <div class="col-4">
                                             <i class="nc-icon nc-paper-2" style="font-size: 5em;"></i>
                                         </div>

                                     </div><hr>
                                     <div class="row">
                                         <strong style="margin-right: 15%; margin-left: 3%;">
                                            No. of Reservations : {{$reservations_all->count()}}
                                        </strong>

                                         <a href="{{route('reservations.index')}}">More Info</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
