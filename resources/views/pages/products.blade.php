@extends('layout', ['title' => 'Producten'])

@section('section')
<table>
<tr>
  <th>Naam</th>
  <th>Kledingsoort</th>
  <th>Maat</th>
  <th>Aantal</th>
</tr>
@foreach($data as $product)
<tr>
  <td>{{$product->productName}}</td>
  <td>{{$product->productType}}</td>
  <td>{{$product->productSize}}</td>
  <td>{{$product->productAmount}}</td>
</tr>
@endforeach

</table>
@endsection