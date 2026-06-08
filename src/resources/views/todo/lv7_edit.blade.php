@extends('layouts.base')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">都道府県・県庁所在地編集</div>
      <div class="card-body">
        <form method="POST" action="{{ route('todo.update', $prefecture->id) }}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">都道府県入力</label>
            <div class="col-md-6">
              <input type="text" class="form-control @if($errors->has('pref')) border-danger @endif" name="pref" value="{{ $prefecture->pref }}">
              @if($errors->has('pref'))
                <span class="text-danger">{{ $errors->first('pref') }}</span>
              @endif
          </div>
          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">県庁所在地入力</label>
              <div class="col-md-6">
                <input type="text" class="form-control @if($errors->has('city')) border-danger @endif" name="city" value="{{ $prefecture->city }}">
              @if($errors->has('city'))
                <span class="text-danger">{{ $errors->first('city') }}</span>
              @endif
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">更新</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection