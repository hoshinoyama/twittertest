@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">

           <?php //@FIXME ユーザーデータの存在チェック ?>

           <div class="card">
               <div class="card-header">ユーザ一覧</div>







                   <div class="card-body">
                       <?php //@FIXME ユーザー名を表示 ?>

                                       @foreach($users as $user)
                                         {{ $user->name }}


                                       @endforeach

                       <div style="float:right">
                         @foreach($follows as $follow)
                         <?php //@FIXME 未フォロー時の表示 ?>
                         {!! Form::open(['id' => 'formTweet', 'url' => 'users/follow/', 'enctype' => 'multipart/form-data']) !!}
                             {{Form::hidden('followId', $user->id, ['id' => 'followId'])}}
                             <button type="submit" class="btn btn-light">
                                 {{ __('フォローする') }}
                             </button>
                         {!! Form::close() !!}
                         <?php //@FIXME フォロー中の表示 ?>
                         {!! Form::open(['id' => 'formTweet', 'url' => 'users/follow/', 'enctype' => 'multipart/form-data']) !!}
                             {{Form::hidden('followId', $user->id, ['id' => 'followId'])}}
