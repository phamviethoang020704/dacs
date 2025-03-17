<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Create New Account
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
      START FOR FREE
     </h2>
     <h1 class="title">
      Create new account.
     </h1>
     <p class="login-text">
      Already A Member?
      <a class="login-link" href="{{ route('login') }}">
       Log In
      </a>
     </p>
     <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-row">
       <div class="form-group">
        <label class="form-label" for="name">
         Name
        </label>
        <div class="input-container">
         <input class="form-input @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus/>
         <i class="fas fa-user input-icon">
         </i>
        </div>
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
       </div>
       
       <div class="form-group">
        <label class="form-label" for="phone">
         Phone
        </label>
        <div class="input-container">
         <input class="form-input @error('phone') is-invalid @enderror" id="phone" name="phone" type="tel" 
                value="{{ old('phone') }}" required autocomplete="tel" pattern="0[0-9]{9}" 
                placeholder="0xxxxxxxxx" maxlength="10"/>
         <i class="fas fa-phone input-icon">
         </i>
        </div>
        @error('phone')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
       </div>
      </div>
      <div class="form-row">
       <div class="form-group">
        <label class="form-label" for="email">
         Email
        </label>
        <div class="input-container">
         <input class="form-input @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"/>
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
        <label class="form-label" for="address">
         Address
        </label>
        <div class="input-container">
         <input class="form-input @error('address') is-invalid @enderror" id="address" name="address" type="text" value="{{ old('address') }}" required autocomplete="street-address"/>
         <i class="fas fa-map-marker-alt input-icon">
         </i>
        </div>
        @error('address')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
       </div>
      </div>
      <div class="form-group">
       <label class="form-label" for="password">
        Password
       </label>
       <div class="input-container">
        <input class="form-input @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="new-password"/>
       </div>
       @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
       <label class="form-label" for="password-confirm">
        Confirm Password
       </label>
       <div class="input-container">
        <input class="form-input" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password"/>
       </div>
      </div>
      <div class="button-row">
       <button class="btn-primary" type="submit">
        Create account
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
