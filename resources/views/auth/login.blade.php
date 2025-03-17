<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Login
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>
 </head>
 <body>
  <div class="container">
   <div class="card">
    <div class="form-section">
     <div class="brand">
      <div class="brand-dot">
      </div>
      <span class="brand-text">
       DriveLux
      </span>
      <nav class="nav">
        <a class="nav-link" href="/">
         Trang Chủ
        </a>
       </nav>
     </div>

     <h2 class="subtitle">
      Chào mừng bạn đã trở lại!
     </h2>
     <h1 class="title">
      Đăng nhập tại đây
     </h1>
     <p class="login-text">
      Bạn chưa có tài khoản ?
      <a class="login-link" href="{{ route('register') }}">
       Đăng ký
      </a>
     </p>

     <!-- Session Status -->
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
     @endif

     <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
       <label class="form-label" for="email">
        Email
       </label>
       <div class="input-container">
        <input class="form-input @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
        <i class="fas fa-envelope input-icon">
        </i>
       </div>
       @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>
      <div class="form-group">
       <label class="form-label" for="password">
        Mật khẩu
       </label>
       <div class="input-container">
        <input class="form-input @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="current-password"/>
       </div>
       @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
       @enderror
      </div>

      <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                Ghi nhớ đăng nhập
            </label>
        </div>
        
        @if (Route::has('password.request'))
          <div class="forgot-password-link">
              <a href="{{ route('password.request') }}" class="login-link">
                  Quên mật khẩu?
              </a>
          </div>
        @endif
      </div>
      
      <div class="button-row">
       <button class="btn-primary" type="submit">
        Đăng nhập
       </button>
      </div>
     </form>
    </div>
    <div class="image-section">
     <img alt="logo-car" class="cover-image" height="800" src="{{ asset('images/bg.png') }}" width="600"/>
    </div>
   </div>
  </div>
  <script src="{{ asset('js/auth-transitions.js') }}"></script>
 </body>
</html>
