<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
            <form action="/registrasi/store" method="POST">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInputUsername" placeholder="name" value="{{ old('name') }}" name="name">
                <label for="floatingInputUsername">Name</label>
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInputEmail" placeholder="name@example.com" value="{{ old('email') }}" name="email">
                <label for="floatingInputEmail">Email address</label>
                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="floatingInputPhone" placeholder="08xxxxx" value="{{ old('phone') }}" name="phone">
                <label for="floatingInputPhone">Phone</label>
                @error('phone')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="address" class="form-control @error('address') is-invalid @enderror" id="floatingInputAddress" placeholder="address" value="{{ old('address') }}" name="address">
                <label for="floatingInputAddress">Address</label>
                @error('address')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{ old('password') }}" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="submit_btn" type="submit">Register</button>
              </div>

              <a class="d-block text-center mt-2 small" href="/login">Have an account? Log In</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>