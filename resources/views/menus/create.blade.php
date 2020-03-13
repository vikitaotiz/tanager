@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Create Menu</h4>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('menus.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="pl-lg-4">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-title">
                                                {{ __('Menu Title') }}
                                            </label>
                                            <input type="text" name="title" id="input-title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Menu Title') }}" value="{{ old('title') }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'title'])
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-category">
                                                {{ __('Menu Category') }}
                                            </label>
                                            <select name="categorymenu_id" id="categorymenu" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}"  required autofocus>
                                                @foreach ($categorymenus as $category)
                                                   <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                            @include('alerts.feedback', ['field' => 'category'])
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-image">
                                                {{ __('Menu Image/Logo') }}
                                            </label>
                                            <input type="file" name="image" id="input-image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required autofocus>

                                            @include('alerts.feedback', ['field' => 'image'])
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-price">
                                                {{ __('Price') }}
                                            </label>
                                            <input type="text" name="price" id="input-price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ old('price') }}" required autofocus>
                                            @include('alerts.feedback', ['field' => 'price'])
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">
                                        {{ __('Menu Description') }}
                                    </label>
                                    <input id="menu_description" type="hidden" name="description" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Menu Descritpion') }}" required autofocus>
                                    <trix-editor input="menu_description"></trix-editor>

                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Create Menu') }}</button>
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

