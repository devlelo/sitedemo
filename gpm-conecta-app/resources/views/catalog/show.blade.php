@extends('layouts.app')
@section('title',$product->name)
@section('content')
<section class="page-head"><div class="section-code">{{ $product->reference }} / {{ $product->category->name }}</div><h1>{{ $product->name }}</h1><p>{{ $product->summary }}</p></section>
<div class="detail-grid"><article><h2>Descrição</h2><p>{{ $product->description ?: 'Descrição técnica a confirmar pela GPM.' }}</p>@if($product->specifications)<h2>Especificações</h2>@foreach($product->specifications as $spec)<div class="spec-row"><span>{{ $spec['label'] ?? '' }}</span><b>{{ $spec['value'] ?? '' }}</b></div>@endforeach @endif</article><aside class="notice"><b>CONDIÇÕES COMERCIAIS</b><p>Preço, stock, quantidade mínima e prazo são confirmados pela equipa GPM após consulta aos fornecedores.</p><form method="post" action="{{ route('cart.add',$product) }}">@csrf<label>Quantidade<input type="number" min="0.01" step="0.01" name="quantity" value="1" required></label><button class="button">Adicionar à lista de pedido</button></form></aside></div>
@endsection
