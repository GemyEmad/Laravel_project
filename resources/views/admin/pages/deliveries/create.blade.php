@extends('admin.layouts.app')

@section('style')

@endsection

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Deliveries</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="inputphone4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </main>


@endsection

@section('script')

@endsection
