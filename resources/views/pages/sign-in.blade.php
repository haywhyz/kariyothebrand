@extends('main')

@section('title', '| Login page')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
  <!-- Contact Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-7">
              </div>

                 <div class="col-lg-4 col-md-4 col-md-offset-1">
                    <div class="login__content">
                        
                        <div class="login__form">
                            <h5>LOGIN</h5>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">

                                <button type="submit" class="site-btn">Login</button>
                                <p>
                                Not yet a member? <a href="/sign-up">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

@endsection