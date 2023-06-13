@extends('layouts.app')

@section('content')
<h1>検索条件を入力してください</h1>
<form action="{{ url('/serch')}}" method="post">
  {{ csrf_field()}}
  {{method_field('get')}}
  <div class="form-group">
    <label>商品名</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい商品名を入力してください" name="product_name">
  </div>
 
  <div class="form-group">
     <label>メーカー名</label>
     <select class="form-control col-md-5" name="company_name">
       <option selected value="0">選択...</option>
       <option value="1">{{$product->company_name}}</option>
       <option value="2">{{$product->company_name}}</option>
     </select>
   </div>

  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
@if(session('flash_message'))
<div class="alert alert-primary" role="alert" style="margin-top:50px;">{{ session('flash_message')}}</div>
@endif
<div style="margin-top:50px;">
<h1>商品一覧</h1>
<table class="table">
  <tr>
    <th>id</th><th>商品画像</th><th>商品名</th><th>価格</th><th>在庫数</th><th>メーカー名</th><th>詳細表示</th><th>削除</th>
  </tr>
@foreach($products as $product)
  <tr>
    <td>{{$product->id}}</td><td>{{$product->img}}</td><td>{{$product->product_name}}</td><td>{{$product->price}}</td><td>{{$product->stock}}</td>
    <td>{{$product->company_name}}</td><td></td><td></td>
  </tr>
@endforeach
</table>
</div>
@endsection
