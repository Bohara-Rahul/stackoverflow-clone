@extends('layouts.app')
@section('content')
  <p>{{ $question->title }}
    <span>Asked by <strong>{{ $question->user->name }}</strong> </span>
  </p>
  
@endsection