@extends('layouts.app') @section('title','Gestão GPM') @section('content')
<section class="page-head"><div class="section-code">GPM / PAINEL OPERACIONAL</div><h1>Gestão de <em>pedidos.</em></h1><p>Visão da operação comercial. Os pedidos só se tornam encomendas após validação interna e aceitação do cliente.</p></section>
<div class="metrics">@foreach(['submitted'=>'Recebidos','under_review'=>'Em análise','supplier_check'=>'Consulta fornecedor','proposal_sent'=>'Propostas enviadas','customer_accepted'=>'Aceites pelo cliente','confirmed'=>'Confirmados'] as $key=>$label)<div><small>{{ $label }}</small><strong>{{ $counts[$key] ?? 0 }}</strong></div>@endforeach</div>
<div class="quick-links"><a href="{{ route('staff.requests') }}">Abrir fila de pedidos ↗</a><a href="{{ route('staff.products') }}">Gerir catálogo ↗</a></div>
<h2>Pedidos recentes</h2>@foreach($recent as $item)<a class="table-row" href="{{ route('staff.requests.show',$item) }}"><b>{{ $item->reference }}</b><span>{{ $item->customer->company_name }}</span><span class="status">{{ str_replace('_',' ',$item->status) }}</span><span>{{ $item->created_at->format('d/m/Y') }}</span></a>@endforeach
@endsection
