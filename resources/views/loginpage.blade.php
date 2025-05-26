@extends("homelayout")
@section('title', 'Hotel-management')

@section("main")



  <div class=" body container ">


    <div class="form-container mt-5">
    <div>
      <ul class="nav nav-tabs " role="tablist">
      <li role="presentation">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login" type="button"><span
          class="me-2"><i class="fa-solid fa-right-to-bracket "></i></span>Login</button>
      </li>

      <li role="presentation">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#register" type="button"><span class="me-2"><i
          class="fa-solid fa-user-plus"></i></span>Register</button>
      </li>
      </ul>

    </div>

    <!-- form -->
    <div class="tab-content mt-3">

      <div id="login" class="tab-pane fade show active ">
      <h3 class="text-primary">Welcome Back! 👋</h3>

      @if(Cookie::get('success'))
        <div class="alert alert-success">
          {{ Cookie::get('success') }}
        </div>
        @endif

        @if($errors->has('login'))
        <div class="alert alert-danger">
          {{ $errors->first('login') }}
        </div>
        @endif


      <form action="{{ route('login') }}" method="POST">
@csrf
        <div class="mb-3">
        <label for="login-email" class="form-label fw-bold">Email:</label>
        <div class="input-group">
          <span class="input-group-text "><i class="fa-solid fa-envelope"></i></span>

          <input id="login-email" class="form-control " placeholder=' Enter your email' value="{{ old('email') }}"
          name="email" type="email" required>
        </div>
        </div>

        <div class="mb-3">
        <label for="login-password" class="form-label fw-bold">Password:</label>
        <div class="input-group">
          <span class="input-group-text "><i class="fa-solid fa-lock"></i></span>

          <input id="login-password" class="form-control " placeholder=' Enter your password'
          value="{{ old('password') }}" name="password" type="password" required>
        </div>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Login</button>
      </form>

      <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
        <p class="mt-2 text-center mb-0">
        Don't have an account?
        <a href="#register" data-bs-toggle="tab"
          class="text-decoration-none text-primary fs-7 fw-bold d-block d-md-inline" id="switch-to-register">
          Create one
        </a>
        </p>
      </div>



      </div>

      <!-- registration -->

      <div id="register" class="tab-pane fade ">
      <h3 class="text-success">Create Your Account 🌟</h3>

      @if(Cookie::get('success'))
        <div class="alert alert-success">
          {{ Cookie::get('success') }}
        </div>
        @endif

        @if($errors->has('email'))
        <div class="alert alert-danger">
          {{ $errors->first('email') }}
        </div>
        @endif

      <form action="{{ route('registration') }}" method="POST">
        @csrf
        <label for="register-username" class="form-label mb-1">Username:</label>
        <input id="register-username" class="form-control mb-2" placeholder="Enter your username"
        value="{{ old('username') }}" name="username" type="text" required>

        <label for="register-city" class="form-label mb-1">City:</label>
        <input id="register-city" class="form-control mb-2" placeholder="Enter your city" value="{{ old('city') }}"
        name="city" type="text" required>


        <label for="register-email" class="form-label mb-1">Email:</label>
        <input id="register-email" class="form-control mb-2" placeholder="Enter your email" value="{{ old('email') }}"
        name="email" type="email" required>

        <label for="register-password" class="form-label mb-1">Password:</label>
        <input id="register-password" class="form-control mb-2" placeholder="Enter your password"
        value="{{ old('password') }}" name="password" type="password" required>

        <button type="submit" class="btn btn-success mt-2">Register🎉</button>
      </form>

      </div>
    </div>

    </div>
  </div>



  <script>

    document.getElementById('switch-to-register').addEventListener('click', forRegisterPage);

    function forRegisterPage(e) {
    e.preventDefault();

    const changeTab = new bootstrap.Tab(document.querySelector('[data-bs-target="#register"]'));
    changeTab.show();
    }

  </script>

@endsection