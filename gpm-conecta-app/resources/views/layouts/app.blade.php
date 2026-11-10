<!doctype html>
<html lang="pt">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="csrf-token" content="{{ csrf_token() }}"><meta name="theme-color" content="#0A2945"><title>@yield('title','GPM Conecta') | Fornecimento empresarial</title><link rel="stylesheet" href="{{ asset('css/gpm.css') }}"></head>
<body>
<header class="topbar"><a class="brand" href="{{ route('home') }}"><b>G</b><span>GPM CONECTA<small>FORNECIMENTO EMPRESARIAL</small></span></a><nav><a href="{{ route('catalog.index') }}">Catálogo</a>@auth @if(auth()->user()->isStaff())<a href="{{ route('staff.dashboard') }}">Gestão</a>@else<a href="{{ route('portal.dashboard') }}">A minha conta</a>@endif<form method="post" action="{{ route('logout') }}">@csrf<button class="nav-button">Sair</button></form>@else<a href="{{ route('login') }}">Entrar</a><a class="nav-cta" href="{{ route('register') }}">Conta empresarial</a>@endauth</nav></header>
@if(session('success'))<div class="flash success">{{ session('success') }}</div>@endif
@if($errors->any())<div class="flash error">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>@endif
<main>@yield('content')</main>
<footer class="footer"><span>GPM CONECTA / PLATAFORMA DE FORNECIMENTO EMPRESARIAL</span><span>ANGOLA · {{ date('Y') }}</span></footer>
</body></html>
