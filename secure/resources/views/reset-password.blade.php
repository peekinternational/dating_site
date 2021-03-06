@extends('layouts.welcome')
@section('content')
<?php
$seo_social_image = setting('social_image');
?>
<style>
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
.intro-img {
width:100%;
height:250px;
background-image: url('{!! isset($seo_image) ? $seo_image : url($seo_social_image) !!}');
background-attachment: fixed;
background-position: center;
background-size: cover;
background-repeat: no-repeat;
}
.pt-20 {
 padding-top:20px;
}
.login_forms .form-control {
    min-height: calc(1.9em + .75rem + 5px);
    box-shadow: inset 0px -1px 1px -2px rgb(149, 149, 149);
    border-radius: 6px;
    font-size: 16px;
}
</style>
    <div class="welcome overflow-hidden">
        <div class="container h-100 position-relative">
          <!--  <span class="position-absolute circle-1"></span>
            <span class="position-absolute circle-2"></span> -->
            <div class="row h-100">
                <div class="col-md-6 d-none d-sm-block"><!--  pt-5 -->
                    <?php
                        $home_background = setting('home_background');
                        $home_background = $home_background ? url($home_background) : url('assets/images/couple.png');
                    ?>
                    <img class="set-image" src="{!! $home_background !!}">
                </div>
                <div class="col-md-6">
                    <div class="row" class="set-login">
                        <div class="col-md-9 mx-auto pt-5">
                          @if(Session::has('resetAlert'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warning!</strong> {!! session()->get('resetAlert') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                {{ session()->forget('resetAlert') }}
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
                                                <li>{!! $error !!}</li>
                                        @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            @endif
                            <form method="post" class="login_forms" action="{{ url('/reset-passwrod') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required>
                                </div>
                                <div class="form-group">
                                  <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </form>

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
<p class="section-summary">For everyone! Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
<div class="intro-img"></div>
<div class="container pt-20">
<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</p>

<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
1914 translation by H. Rackham</p>

<h2>The standard Lorem Ipsum passage, used since the 1500s</h2>

<p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
</div>
</div>
@endsection
