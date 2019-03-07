@extends('site.layouts.illia')

@section('head_content')
<!-- The link and meta here -->
@endsection


@section('page_content')
@if (Auth::user()->steps == null)
<div id="section3" class="all-content" style="height:100vh;width:100%;background-color:#fdfdfd">
    <div class="container">
        <div class="row">
        <style>
        .step {
            text-align:center;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid #aacef6;
            margin:20px auto;

        }
        </style>
            <div class="col-md-12">
                <div class="jumbotron" style="margin:5%; text-align:center;">
                <div class="row">
                <div class="col-md-12">
                    <p>الخطوة الاولى أضافة صورة تعبر عنك ليتعرف عليك كل الاشخاص داخل عالمنا</p>
            </div>
                <div class="col-4" style="text-align:center">
            <div class="step">
s
            </div>
            </div>
            <div class="col-4">
            <div class="step">
            s
            </div>
            </div>
            <div class="col-4">
            <div class="step">
            s
            </div>
            </div>
            <div class="col-md-12">
            <h3>أضف صورة تعبر عنك</h3>
            <div style="text-align:center; width:100%; padding:30px;">
                        <img src="img/svg/undraw_personal_site_xyd1.svg" style="width:200px">
                    </div>
                    <button type="submit" class="btn-submit">أضف صوره</button>
            </div>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('nav_content')

<li><i class="pe-7s-user"></i></li>
<li><i class="pe-7s-like"><i class="fa fa-circle notifacation">+99</i></i></li>
<li><i class="pe-7s-users"></i></li>
<li><i class="pe-7s-chat"><i class="fa fa-circle notifacation">+99</i></i></li>


@endsection

@section('popup_content')

@endsection

@section('script_content')

<!-- The Js file here -->
@endsection