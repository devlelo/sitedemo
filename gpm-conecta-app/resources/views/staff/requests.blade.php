@extends('layouts.app') @section('title','Fila de pedidos') @section('content')
<section class="page-head"><div class="section-code">GESTÃO / OPERAÇÃO</div><h1>Fila de <em>pedidos.</em></h1></section>
<form class="filters" method="get"><select name="status"><option value="">Todos os estados</option>@foreach(['submitted','under_review','supplier_check','awaiting_customer','proposal_sent','customer_accepted','confirmed','preparing','dispatched','delivered','rejected'] as $s)<option value="{{ $s }}" @selected(request('status')===$s)>{{ str_replace('_',' ',$s) }}</option>@endforeach</select><button class="button">Filtrar</button></form>
@foreach($requests as $item)<a class="table-row" href="{{ route('staff.requests.show',$item) }}"><b>{{ $item->reference }}</b><span>{{ $item->customer->company_name }}</span><span>{{ $item->customer->nif }}</span><span class="status">{{ str_replace('_',' ',$item->status) }}</span></a>@endforeach{{ $requests->links() }}
@endsection
