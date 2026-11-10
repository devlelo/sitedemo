<!doctype html><html lang="pt"><head><meta charset="utf-8"><style>
@page{margin:34px 38px}body{font:12px DejaVu Sans,sans-serif;color:#142b3c}h1{font-size:24px;color:#0A2945;margin:0}h2{font-size:15px;color:#0A2945;margin:24px 0 8px}.meta{font-size:10px;color:#647482;margin:6px 0 20px}.rule{border-top:2px solid #CE9E53;margin:16px 0}table{width:100%;border-collapse:collapse;margin-top:12px}th{background:#0A2945;color:white;text-align:left;font-size:10px;padding:9px}td{padding:9px;border-bottom:1px solid #d7dee3}td.num,th.num{text-align:right}.total{text-align:right;font-size:18px;font-weight:bold;color:#0A2945;margin-top:20px}.notice{margin-top:28px;padding:12px;border:1px solid #d7dee3;font-size:10px;color:#647482}.foot{position:fixed;bottom:-18px;left:0;right:0;font-size:9px;color:#647482;border-top:1px solid #d7dee3;padding-top:8px}
</style></head><body>
<h1>GPM CONECTA</h1><div class="meta">FORNECIMENTO EMPRESARIAL · PROPOSTA COMERCIAL · DOCUMENTO NÃO FISCAL</div><div class="rule"></div>
<h2>Proposta {{ $proposal->version }} · {{ $proposal->request->reference }}</h2>
<p><b>Cliente:</b> {{ $proposal->request->snapshot_company }}<br><b>NIF:</b> {{ $proposal->request->snapshot_nif }}<br><b>Morada:</b> {{ $proposal->request->snapshot_address }}</p>
<p><b>Emissão:</b> {{ optional($proposal->sent_at)->format('d/m/Y') }}<br><b>Validade:</b> {{ optional($proposal->valid_until)->format('d/m/Y') }}<br><b>Estado:</b> {{ strtoupper($proposal->status) }}</p>
<table><thead><tr><th>Descrição</th><th class="num">Quantidade</th><th>Un.</th><th class="num">Preço unitário</th><th class="num">Total</th></tr></thead><tbody>
@foreach($proposal->lines as $line)<tr><td>{{ $line->description }}<br><small>{{ $line->availability_note }} @if($line->lead_time_days) · {{ $line->lead_time_days }} dias @endif</small></td><td class="num">{{ number_format($line->quantity,2,',','.') }}</td><td>{{ $line->unit }}</td><td class="num">{{ number_format($line->unit_price,2,',','.') }}</td><td class="num">{{ number_format($line->line_total,2,',','.') }}</td></tr>@endforeach
</tbody></table><div class="total">Subtotal: {{ $proposal->currency }} {{ number_format($proposal->subtotal,2,',','.') }}</div>
@if($proposal->notes)<h2>Condições e observações</h2><p>{{ $proposal->notes }}</p>@endif
<div class="notice">Este documento é uma proposta comercial e não constitui fatura, proforma fiscal, recibo, confirmação de stock ou confirmação de encomenda. O fornecimento só fica confirmado após aceitação do cliente e validação final da GPM.</div>
<div class="foot">GPM CONECTA · {{ $proposal->request->reference }} · Proposta versão {{ $proposal->version }}</div>
</body></html>
