@extends('layouts.app') @section('title','Área do cliente') @section('content')
<section class="page-head"><div class="section-code">PORTAL DO CLIENTE / {{ auth()->user()->company_name }}</div><h1>Os seus <em>pedidos.</em></h1><p>Consulte o andamento, as propostas e as conversas associadas a cada pedido.</p></section>
<div class="table-head"><span>REFERÊNCIA</span><span>DATA</span><span>ESTADO</span><span>ITENS</span></div>
@forelse($requests as $item)<a class="table-row" href="{{ route('portal.requests.show',$item) }}"><b>{{ $item->reference }}</b><span>{{ $item->created_at->format('d/m/Y') }}</span><span class="status">{{ str_replace('_',' ',$item->status) }}</span><span>{{ $item->items_count }}</span></a>@empty<div class="empty-state"><b>00 / SEM PEDIDOS</b><h2>Ainda não submeteu pedidos.</h2><p>Explore o catálogo e envie uma lista de necessidades para análise da GPM.</p><a class="button" href="{{ route('catalog.index') }}">Explorar catálogo</a></div>@endforelse
{{ $requests->links() }}
@endsection
