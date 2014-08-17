@extends('layouts.default')

@section('title')
{{{ $user->name }}} 的帖子列表_@parent 
@stop

@section('content')


<div class="col-md-8 col-md-offset-2 users-show">

  <div class="panel panel-default">

    @include('users.partials.infonav', ['current' => 'replies'])

    <div class="panel-body remove-padding-vertically remove-padding-horizontal">
      
      @if (count($replies))
	      @include('users.partials.replies')
	      <div class="pull-right">
	        {{ $replies->links(); }}
	      </div>
      @else
	       <div class="empty-block">还未留下任何评论~~</div>
      @endif

    </div>

  </div>
</div>

@stop