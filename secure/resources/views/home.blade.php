@extends('layouts.welcome')
@section('content')
<?php
$seo_social_image = setting('social_image');
?>
<?php
$seo_website_title = setting('website_title');
$seo_website_description = setting('website_description');
?>
@section('page_title')
    {{ "Home | Welcome to" }}
@endsection
@section('page_description')
    {!! isset($seo_description) ? $seo_description.','.$seo_website_description : $seo_website_description !!}
@endsection
@section('social_image')
    {!! isset($seo_image) ? $seo_image : url($seo_social_image) !!}
@endsection
<style>
.welcome {
min-height:480px;
}
.form-group label {
color:#ffffff;
}
.set-image {
width:100%;
height:100%;
margin:auto;
}
.btn-register {
background:#f478c4;
color:#ffffff;
}
.set-login {
margin-top:5%;
}
.section-h1 {
padding-top:40px;
padding-bottom:10px;
font-weight:700;
}
.section-summary {
text-align:center;
font-weight:bolder;
margin-bottom:50px;
}
h2 {
font-size:24px;
font-weight:bolder;
}
.intro {
background:white;
padding-bottom:25px;
}
.pt-20 {
 padding-top:20px;
}
.hidden {
display:none;
}
@media screen and (max-width:760px) {
.welcome {
min-height:550px;
}
}
</style>
    <div class="welcome overflow-hidden">
        <div class="container h-100 position-relative">
          <!--  <span class="position-absolute circle-1"></span>
            <span class="position-absolute circle-2"></span> -->
            <div class="row h-100">
                <div class="col-md-6 d-none hidden"><!-- d-sm-block  pt-5 -->
                    <?php
                        $home_background = setting('home_background');
                        $home_background = $home_background ? url($home_background) : url('assets/images/couple.png');
                    ?>
                    <img class="set-image" src="{!! $home_background !!}">
                </div>
                <div class="col-md-12">
                    <div class="row" class="set-login">
                        <div class="col-md-6 mx-auto pt-5">
                            @if(session()->has('fail_login'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> {!! session()->get('fail_login') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                {{ session()->forget('fail_login') }}
                            @endif
                            @if(Session::has('passwordSuccess'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {!! session()->get('passwordSuccess') !!}
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                                  {{ session()->forget('passwordSuccess') }}
                              @endif
                            @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            @foreach($error as $item)
                                                <li>{!! $item !!}</li>
                                            @endforeach
                                        @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            @endif
                            <form method="post" class="login_form" action="">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" required name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" required name="password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <a href="{{url('forget-password')}}" style="color:white;">Forget password ?</a>
                            <p class="text-center mt-4 mb-4"><a class="btn btn-register btn-block" href="{!! route('register') !!}">Register</a></p>
                            @if(setting('social_login'))
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{!! route('loginfacebook') !!}" class="btn btn-block btn-facebook btn-sm mb-2"><i class="fab fa-facebook-f"></i> Login with Facebook</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{!! route('logintwitter') !!}" class="btn btn-block btn-twitter btn-sm mb-2"><i class="fab fa-twitter"></i> Login with Twitter</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')


<div class="intro">
<div class="text-center section-h1">
<h1>Fun, free online dating website and app</h1>
</div>
<p class="section-summary">For everyone! modi tempora incidunt ut labore et dolore magnam aliquam quaerat</p>
<div class="container pt-20">
<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</p>

<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut </p>
</div>
</div>
@endsection
