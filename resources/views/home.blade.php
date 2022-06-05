@extends('layouts.app')


@section('content')
    <main class="page-content">
        <div class="container-fluid">
            {{-- <h2>Pro Sidebar</h2> --}}
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>

            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <p>Login as <span class="text-primary">{{ Auth::user()->name }}</span>.</p>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">TOTAL CABINET</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $cabinet_count }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                        <div class="card-header">TOTAL FILES</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $file_count }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                        <div class="card-header">TOTAL COMMUNITY</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $community_count }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <h4 class="alert-heading">Recent Added Community !</h4>
                </div>

                <div class="form-group col-md-12">
                    <div class="row">
                        @if ($communities->count() > 0)
                            @foreach ($communities as $community)
                                <div class="col-md-12">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Cabinet: {{ $community->cabinet->cabinet }} </h4>
                                        <p>
                                            {!! Str::substr($community->community_name, 0, 250) !!}
                                        </p>
                                        <a href="{{ route('community.edit', $community->slug) }}"
                                            class="btn btn-sm btn-success">
                                            Manage </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center">
                                <h5>No Recent Added Community</h5>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endsection
