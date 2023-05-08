@extends('front.layouts.app')

@section('style')

@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}

                        {{-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- my design --}}

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">sign up</h5>
                  </div>

                  <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                     @csrf


                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="Name" class="form-label"> {{ __('Name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                      {{-- <div class="invalid-feedback">Please, enter your name!</div> --}}
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                    <div class="col-12">
                      <label for="Phone" class="form-label"> {{ __('Phone') }}</label>
                      <input id="Phone" type="text" class="form-control @error('Phone') is-invalid @enderror" name="Phone" value="{{ old('Phone') }}" required autocomplete="Phone" autofocus>
                      {{-- <div class="invalid-feedback">Please enter a valid Phone!</div> --}}
                      @error('Phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="col-12">
                      <label for="Email" class="form-label">{{ __('Email ') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                      {{-- <div class="invalid-feedback">Please enter a valid Email adddress!</div> --}}
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>


                    <div class="col-12">
                      <label for="yourAddress" class="form-label">Address</label>
                      <div class="input-group has-validation">
                        <input id="Address" type="Address" class="form-control @error('Address') is-invalid @enderror" name="Address" required autocomplete="Address">
                        {{-- <div class="invalid-feedback">Please choose a Address.</div> --}}
                        @error('Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                    </div>

                      <div class="col-12">
                      <label for="yourPassword" class="form-label">{{ __('Password') }}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      {{-- <div class="invalid-feedback">Please enter your password!</div> --}}
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        {{-- <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}


                    <div class="col-12">
                      <label for="Gender" class="form-label"> Gender</label>
                      <!-- <input type="Gender" name="Gender" class="form-control" id="Gender" required> -->
                      <div class="invalid-feedback">Please enter your Gender!</div>
                      <div>
                        <input id="mal" type="radio" name="Gender" value="Gender" checked />
                        <label for="mal">Male</label>
                      </div>
                      <div>
                        <input id="Fml" type="radio" name="Gender" value="Gender" />
                        <label for="Fml">Female</label>
                      </div>
                    </div>



                    <div class="col-12">
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Acconunt</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ route ('login')}}">Log in</a></p>
                      {{-- <p class="small mb-0"> <a href="#">Back to home</a></p> --}}
                    </div>

                  </form>
                </div>

                </div>


              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


@endsection
