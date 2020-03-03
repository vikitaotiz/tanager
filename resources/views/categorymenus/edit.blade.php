@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Edit Menu Category</h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('categorymenus.update', $categorymenu->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-title">
                                        {{ __('Menu Category Title') }}
                                    </label>
                                    <input type="text" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Partner Title') }}" value="{{ $categorymenu->title }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'title'])
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">{{ __('Update Menu Category') }}</button>
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
