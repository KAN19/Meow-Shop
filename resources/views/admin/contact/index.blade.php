@extends('admin.master')

@section('title', 'Orders Manager')

@section('content_header')
<div class="d-flex align-items-center">
    <h1 class="mr-2">Contacts</h1>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin/contact.css">
@stop

@section('breadcrumb')
<li class="breadcrumb-item active">Contacts</li>
@stop


@section('content')
<div>
    contact list ne

</div>
@stop

@section('js')
<script>


$(document).ready(function() {
    $("#master-contact").addClass("active");
});
</script>
@stop