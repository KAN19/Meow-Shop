@extends('admin.master')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p class="text-primary">Welcome to this beautiful admin panel.</p>
@stop

@section('js')
<script>
$(document).ready(function() {
    $("#master-dashboard").addClass("active");
});
</script>
@stop