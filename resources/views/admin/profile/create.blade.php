{{-- PHP/Laravel 11課題４resources/views/layouts/profile.blade.phpを読み込み --}}
@extends('layouts.profile')

{{-- layouts/profile.blade.phpの@yield('title')に'My プロフィール'を埋め込む --}}
@section('title','自分のプロフィール')

{{-- layouts/profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-mr-8 mx-auto">
                <h1>My プロフィール</h1>
            </div>
        </div>
    </div>
@endsection