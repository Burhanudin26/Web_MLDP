@extends('bar')

@section('main')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card p-4 shadow-lg border-0">
        <h2 class="text-center mb-4">Ubah Profile</h2>
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-12">
            <label for="validationCustom01" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter your full name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please enter your full name.
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom02" placeholder="Enter your email" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please enter a valid email address.
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter your username" aria-describedby="inputGroupPrepend" required>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Please choose a unique username.
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" placeholder="Enter your password" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please enter your desired password.
            </div>
          </div>
          <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="validationCustom04" placeholder="Confirm your password" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please confirm your password.
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                I agree to the terms and conditions.
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100 mt-3" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
