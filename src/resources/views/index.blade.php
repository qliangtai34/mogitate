@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__alert">
  <div class="todo__alert--success">
    Todoを作成しました
  </div>
</div>

<div class="todo__content">
    <div class="section__title">
   <h2>新規作成</h2>
 </div>
  <form class="create-form" action="/todos" method="post">
 @csrf
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="name">
     <select class="create-form__item-select" name="category_id">
             @foreach ($categories as $gory)
                 <option value="{{ $gory['id'] }}">{{ $gory['name'] }}</option>
             @endforeach
       <option value="">カテゴリ</option>
     </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <form class="create-form" action="/todos" method="post">
 @csrf
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="price">
     
       <option value="">カテゴリ</option>
     </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <form class="create-form" action="/todos" method="post">
 @csrf
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="image">
     
       <option value="">カテゴリ</option>
     </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <form class="create-form" action="/todos" method="post">
 @csrf
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="description">
     
       <option value="">カテゴリ</option>
     </select>
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  
</div>
@endsection
