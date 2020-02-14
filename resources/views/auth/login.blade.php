@extends('layouts.app-login')

@section('content')

    <div>
      <script>
  // A $( document ).ready() block.
$( document ).ready(function() {
    alert();
});
</script>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">
              <h1>Login Form</h1>
              <div class="form-group">
                @csrf
                <input placeholder="Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
              
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong style="font-size: 11px">{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div class="form-group">
                      <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong style="font-size: 11px">{{ $message }}</strong>
                          </span>
                      @enderror
                </div>
                <div>
                <button type="submit" class="btn btn-primary form-control">
                    {{ __('Login') }}
                </button>
                </div>
                <br><br>

              <div class="clearfix"></div>

              <div class="separator">
              <!--   <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <!-- <h1>School Management System </h1> -->
                  <p>©2020 All Rights Reserved. OS Technology</p>
                  <i class="fa fa-paw"></i><br><br>
                  
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

@endsection