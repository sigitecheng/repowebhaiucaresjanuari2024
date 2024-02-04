{{-- @extends('layouts.mainlogin')

@section('container')

<div class="container halaman-login">


    <h1>Ini adalah halaman login</h1>
    <div class="row">
    <div class="col-md-4">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <main class="form-signin">
            <form target="_blank" action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mt-2">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div> -->

                <button class="w-100 btn btn-lg btn-primary mt-4 " type="submit">Login</button>
                <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a> </small>
                <!-- <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p> -->
            </form>
        </main>
    </div>
    </div> 

</div>
@endsection
 --}}
{{-- @extends('layouts.footer') --}}

 @extends('layouts.mainlogin')
 
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

             @if(session()->has('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>{{ session('success') }}</strong>
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             @endif

             
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('loginError') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

          <form class="sign-in-form" action="/login" method="post">
            @csrf 
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              {{-- <input type="text" placeholder="Username" /> --}}
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email address" value="{{ old('email') }}" autofocus required>
              {{-- <label for="email">Email address</label> --}}
              @error('email')
              <div class="invalid-feedback mb-2">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              {{-- <input type="password" placeholder="Password" /> --}}
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    {{-- <label for="password">Password</label> --}}
                    @error('password')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
            </div>

            {{-- <small class="d-block text-center mt-2">Not registered? <a href="/register">Register Now!</a> </small> --}}

            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="far fa-envelope"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            
          </form>



          {{-- ======================= HALAMAN FORM SIGN UP ======================== --}}
          <form action="/register" method="post" class="sign-up-form">
              @csrf
            
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              {{-- <input type="text" placeholder="Username" /> --}}
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                {{-- <label for="username">Username</label> --}}
                @error('username')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              {{-- <input type="email" placeholder="Email" /> --}}
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
                {{-- <label for="email">Email address</label> --}}
                @error('email')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              {{-- <input type="password" placeholder="Password" /> --}}
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              {{-- <label for="password">Password</label> --}}
              @error('password')
              <div class="invalid-feedback mb-2">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            
          </form>


        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
                "Satu kebaikan bisa mengubah hidup seseorang. Mari bantu sesama hari ini"
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/<?= $imagelogin1 ?>" class="image" alt="<?= $imagelogin1 ?>" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              "Satu kebaikan bisa mengubah hidup seseorang. Mari bantu sesama hari ini"
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/<?= $imagelogin2 ?>" class="image" alt="<?= $imagelogin2 ?>" />
        </div>
      </div>
    </div>

    <script src="/js/login.js"></script>
    {{-- <script src="app.js"></script> --}}
  </body>
</html>
