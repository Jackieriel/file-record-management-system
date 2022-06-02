@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="login-container">
            <div class="login-logo">
                <h2>ENUGU STATE SECRETARIAT</h2>
                <h3>Department of Chieftaincy Matters </h3>
                <h5>File Indexing Management System</h5>
            </div>
            <div class="login-box">
                <div class="card card-body login-box-body">
                    <p class="login-box-msg">{{ __('Sign in') }}
                    </p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="login" style="background: #e9ecef;">
                                    <i class="fa fa-user p-2"></i>
                                </span>

                                <input type="text" name="login"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    required autofocus placeholder="Username or Email" aria-label="Username or Emaiil"
                                    aria-describedby="Username or Email" value="{{ old('username') ?: old('email') }}">

                                {{-- New --}}
                                {{-- <input id="login" type="text"
               class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
               name="login" value="{{ old('username') ?: old('email') }}" required autofocus> --}}

                                {{-- New --}}

                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="password" style="background: #e9ecef;">
                                    <i class="fa fa-key p-2"></i>
                                </span>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" required
                                    autocomplete="current-password" placeholder="Password" aria-label="Password"
                                    aria-describedby="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">
                                <i class="fa fa-sign-in-alt"></i>
                                {{ __('Sign In') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- ======= Footer ======= -->
        <footer class="text-white">
            <div class="container text-center bottom-bottom">
                <div class="credits pb-2">
                    Developed with <i class="fa fa-heart text-danger"> </i> by <a href="https://jackieriel.web.app/"
                        target="_blank" class="text-white">Jackieriel</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
@endsection
