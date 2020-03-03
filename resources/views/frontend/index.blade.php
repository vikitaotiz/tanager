@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Universal', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title">Front Page Sections</h4>
                    </div>
                    <div class="card-body all-icons">
                        <div class="row">
                            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                <a href="{{route('categorymenus.index')}}">
                                    <div class="font-icon-detail">
                                        <p>MENU CATEGORY</p>
                                    </div>
                                </a>
                            </div>

                            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                <a href="{{route('menus.index')}}">
                                    <div class="font-icon-detail">
                                        <p>MENU</p>
                                    </div>
                                </a>
                            </div>


                        </div>

                        {{-- <div class="row">
                            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="font-icon-detail">
                                    <i class="nc-icon nc-air-baloon"></i>
                                    <p>nc-air-baloon</p>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
