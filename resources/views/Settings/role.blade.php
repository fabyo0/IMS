@extends('layouts.app')

@section('title')
  <title>IMS| Settings</title>
@endsection

@section('page-name')
   Settings
@endsection

@section('styles')
  <style>
        .form-control{
            background: #f0ebeb;
        }
  </style>
@livewireStyles

@endsection

@section('main-content')
    @livewire('settings.role-permissions',['role' => $role])
@endsection

@section('scripts')

  @livewireScripts
  <script defer src="https://unpkg.com/alpinejs@3.10.1/dist/cdn.min.js"></script>
@endsection
