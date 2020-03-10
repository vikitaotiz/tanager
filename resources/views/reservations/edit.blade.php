@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Edit Reservation</h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('reservations.update', $reservation->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="pl-lg-4">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-first_name">
                                                {{ __('First Name') }}
                                            </label>
                                            <input type="text" name="first_name" id="input-first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="{{ __('First Name') }}" value="{{ $reservation->first_name }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'first_name'])
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-last_name">
                                                {{ __('Last Name') }}
                                            </label>
                                            <input type="text" name="last_name" id="input-last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Last Name') }}" value="{{ $reservation->last_name }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'last_name'])
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-phone">
                                                {{ __('Phone') }}
                                            </label>
                                            <input type="text" name="phone" id="input-phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ $reservation->phone }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'phone'])
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('reservation_date') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-reservation_date">
                                                {{ __('Date') }}
                                            </label>
                                            <input type="text" name="reservation_date" id="input-reservation_date" class="form-control{{ $errors->has('reservation_date') ? ' is-invalid' : '' }}" placeholder="{{ __('Reservation Date') }}" value="{{ $reservation->reservation_date }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'reservation_date'])
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('no_of_people') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-first_name">
                                                {{ __('First Name') }}
                                            </label>
                                            <input type="text" name="no_of_people" id="input-no_of_people" class="form-control{{ $errors->has('no_of_people') ? ' is-invalid' : '' }}" placeholder="{{ __('Number of People') }}" value="{{ $reservation->no_of_people }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'first_no_of_people'])
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                            <label class="form-control-label">
                                                {{ __('Email (Optional)') }}
                                            </label>
                                            <input type="text" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ $reservation->email }}" >
                                    </div>
                                </div>

                                <div class="row m-1">
                                    <label class="form-control-label">
                                        {{ __('More Information (Optional)') }}
                                    </label>
                                    <textarea name="more_info" cols="30" rows="10" class="form-control" placeholder="{{ __('More Information') }}" >
                                        {{ $reservation->more_info }}
                                    </textarea>
                                </div><hr>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Update Reservation') }}</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
