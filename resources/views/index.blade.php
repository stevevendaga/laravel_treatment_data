@extends('layouts.app')

<div class="searchbar">
     @include('searchbar')
</div>
@section('content')
<div class="card-body" style="background-color: white">
    

    {{-- <label>Status:
        <span class="read">Read</span>
        <span class="unread">Unread</span>
    </p> --}}
    <div class=" card-content table-responsive">
        <table id="table-readstatus" style="display: block">
            <th>Contract ID</th>
            <th>Read Status</th>
            <tbody></tbody>
        </table>
        <label id="msg" style="color:green"></label>
        <table id="empTableMain" style="display: none;" class="table table-striped table-bordered" style="width:100%">
            <thead id="table-head" >
            <th>idcontrato</th>
            <th>nAnuncio</th>
            <th>tipoContrato</th>
            <th>tipoprocedimento</th>
            <th>objectoContrato</th>
            <th>adjudicantes</th>
            <th>adjudicatarios</th>
            <th>dataPublicacao</th>
            <th>dataCelebracaoContrato</th>
            <th>precoContratual</th>
            <th>CPV</th>
            <th>prazoExecucao</th>
            <th>localExecucao</th>
            <th>fundamentacao</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
  
</div>

   <!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
