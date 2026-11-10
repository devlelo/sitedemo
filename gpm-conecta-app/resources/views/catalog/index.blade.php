@extends('layouts.app')
@section('title','Catálogo')
@section('content')
<section class="page-head"><div class="section-code">MARKETPLACE / CATÁLOGO PÚBLICO</div><h1>Catálogo de <em>fornecimento.</em></h1><p>Explore referências publicadas. Preços, disponibilidade e prazos são confirmados pela GPM após consulta.</p></section>
<form class="filters" method="get"><input name="q" value="{{ request('q') }}" placeholder="Pesquisar nome ou referência"><select name="area"><option value="">Todas as áreas</option>@foreach($categories as $category)<option value="{{ $category->slug }}" @selected(request('area')===$category->slug)>{{ $category->name }}</option>@endforeach</select><button class="button">Pesquisar</button></form>
<div class="product-list">@forelse($products as $product)<a class="product-row" href="{{ route('catalog.show',$product) }}"><span class="mono">{{ $product->reference }}</span><strong>{{ $product->name }}</strong><span>{{ $product->category->name }}</span><i>Consultar ↗</i></a>@empty<div class="empty-state"><b>00 / SEM REFERÊNCIAS PUBLICADAS</b><h2>Catálogo em preparação.</h2><p>Os produtos serão publicados após validação da informação técnica. Não inventamos preços nem disponibilidade.</p></div>@endforelse</div>{{ $products->links() }}
@endsection
