@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <h2>Create New Question</h2>
          <div class="card-body">
           <form action="{{ route('questions.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="question-title">Question Title</label>
              <input 
                type="text" 
                name="title" 
                id="question-title" 
                class="form-control {{ $errors->first('title') ? 'invalid' : '' }}"
                value="{{ old('title') }}" 
              />

              @if ($errors->has('title'))
                <div class="invalid-feedback">
                  <strong>{{ $errors->first('title') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-group">
              <label for="question-body">Explain your question</label>
              <textarea 
                name="body" 
                id="question-body" 
                class="form-control {{ $errors->first('body') ? 'invalid' : '' }}"
                rows="10"
              >{{ old('body') }}</textarea>

              @if ($errors->has('body'))
                <div class="invalid-feedback">
                  <strong>{{ $errors->first('body') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-outline-primary btn-lg">
                Ask this question
              </button>
            </div>
           </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
