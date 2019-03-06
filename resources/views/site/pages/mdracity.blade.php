@extends('site.layouts.illia')

@section('head_content')
<!-- The link and meta here -->

@endsection


@section('page_content')
<div id="section1" class="all-content" style="height:100vh;width:100%;background-color:#fdfdfd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="margin:10%; text-align:center">
                    <h1>انضم الان معنا مجاناً</h1>
                    <p>تعرف على أقوى الطالب والمعلمين ومراكز التعليم داخل مصر ويمكن ان تصبح يوما واحد منهم </p>
                    <img src="img/svg/undraw_true_friends_c94g.svg" style="width:30%;display: inline-block">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('nav_content')
<!--
<li><i class="pe-7s-user"></i></li>
<li><i class="pe-7s-like"><i class="fa fa-circle notifacation">+99</i></i></li>
<li><i class="pe-7s-users"></i></li>
<li><i class="pe-7s-chat"><i class="fa fa-circle notifacation">+99</i></i></li>
-->
<li><a class="btn btn-trans" role="button" data-toggle="modal" data-target="#register_popup">أشتراك</a></li>
<li><a class="btn btn-trans" role="button" data-toggle="modal" data-target="#login_popup">دخول</a></li>
@endsection

@section('popup_content')
<!-- login -->
<div class="modal fade" id="login_popup" tabindex="-1" role="dialog" aria-labelledby="login_popupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center">
        <h5>تسجيل الدخول<h5>
        <div class="row">
            <div class="col-md-12">
              @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                   {{ $errors->first('email') }}
                </div>
              @endif
              @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                     {{ $errors->first('password') }}
                </div>
              @endif
            </div>
            <div class="col-md-6">
                <img src="img/svg/undraw_book_lover_mkck.svg" style="height:200px;">
            </div>
            <div class="col-md-6">
                <form id="login_form" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="md-form-group">
                        <input type="text" placeholder="البريد الالكتروني" name="email" value="{{ old('email') }}" required autofocus>
                        <br>
                        <input type="password" placeholder="كلمة السر" name="password" required>
                    </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-out" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn-submit" id="login_btn">دخول</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End login  -->
<!-- Register -->
<div class="modal fade" id="register_popup" tabindex="-1" role="dialog" aria-labelledby="register_popupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body" style="text-align:center">
        <h5>الاشتراك<h5>
        <div class="row">
            <div class="col-md-12">
                <img src="img/svg/undraw_brainstorming_49d4.svg" style="height:100px">
            </div>
            <div class="col-md-12">
            @if ($errors->has('fname'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('fname') }}
                </div>
            @endif
            @if ($errors->has('lname'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('lname') }}
                </div>
            @endif
            @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('email') }}
                </div>
            @endif
            @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('password') }}
                </div>
            @endif
            </div>
            <div class="col-md-12">
              <form id="re_form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="md-form-group">
                        <div class="input-name">
                            <input type="text" placeholder="الثاني" style="text-align:right;width:auto" id="fname" class="{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('fname') }}" required autofocus>
                            <input type="text" placeholder="الاسم الاول" style="text-align:right;width:auto" id="lname" class="{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('lname') }}" required autofocus>
                        </div>
                        <input type="email" placeholder="البريد الالكتروني" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required><br>
                        <input type="password" placeholder="كلمة السر" id="password"  class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <input type="password" placeholder="تأكيد كلمة السر" id="password-confirm" name="password_confirmation" required>
                    </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-out" data-dismiss="modal">الغاء</button>
        <button id="re_btn" type="submit" class="btn-submit">أشتراك</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End register  -->
@endsection

@section('script_content')
    @if ($errors->any() && !$errors->has('publish_at'))
      <script>$('#login_popup').modal();</script>
    @endif

    @if ($errors->first('publish_at') == true) 
    <script>$('#register_popup').modal();</script>
    @endif

    <script>
    $(document).on("click","#re_btn", function() {
      var re_form = $('#re_form').serialize();
      var url = $('#re_form').attr('action');
      $.ajax({
        url:url,
        dataType:'html',
        data: re_form,
        type: 'post',
        beforSend: function()
        {

        },success: function(data)
        {
          alert(data);
        }
      });
      
      return false;
    });
    </script>
<!-- The Js file here -->
@endsection