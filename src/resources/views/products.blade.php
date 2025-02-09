@extends('layouts.app')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'add.blade.php')

@section('content')
<form action="" method="post">
  <table>
  @csrf
  <select class="create-form__item-select" name="category_id">
             @foreach ($categories as $category)
                 <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
             @endforeach
    <tr>
      <th>name</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>price</th>
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
      <th>image</th>
      <td><input type="text" name="image"></td>
    </tr>
    <tr>
      <th>description</th>
      <td><input type="text" name="description"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
@endsection

