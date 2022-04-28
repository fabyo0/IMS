@extends('layouts.app')

@section('title')
  <title>Investors</title>
@endsection

@section('page-name')
  New Investor
@endsection

@section('styles')

@livewireStyles

@endsection

@section('main-content')
    @livewire('investors.new-investor')
@endsection

@section('scripts')

  @livewireScripts

  <script defer src="https://unpkg.com/alpinejs@3.10.1/dist/cdn.min.js"></script>

@endsection
