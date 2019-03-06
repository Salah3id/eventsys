@extends('site.layouts.illia')

@section('head_content')
<!-- The link and meta here -->
@endsection


@section('page_content')
<div id="section3" class="all-content" style="height:100vh;width:100%;background-color:#fdfdfd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="margin:10%; text-align:center">
                    <h1>أضف صورة تعبر عنك ليتعرف عليك من حولك </h1>
                    <p>وجود صورة تعبر عنك سوف يسهل عليك التوصل مع من يهمك وليتعرف عليك كل الاشخاص داخل المدينة</p>
                    <button type="submit" class="btn-submit">التالي</button>
                </div>
            </div>
        </div>
    </div>
</div>
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