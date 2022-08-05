@extends('layouts.app')

<div class="searchbar">
    <!--For external use -->
    {{-- @include('searchbar') --}}
    <!-- For internal use -->
    @include('searchbar_internal')
</div>
@section('content')
<div class="card-body" style="background-color: white">
    @if(!empty($_GET['date']))
    <h4>
        Viewing records by date ({{ $_GET['date'] }})
    </h2>
    @elseif(!empty($_GET['company']))
    <h4>
        Viewing records by winning Company ({{ $_GET['company'] }})
    </h2>
    @elseif(!empty($_GET['amount1']))
    <h4>
        Viewing records by Amount (range) ({{ $_GET['amount1'] }} - {{ $_GET['amount2'] }} )
    </h2>
    @elseif(!empty($_GET['readstatusid']))
    <h4>
        Viewing records by Contract ID read status ({{ $_GET['readstatusid'] }} )
    </h2>
    <label>Status:
        @if($data==1)
        <span class="read">Read</span>
        @else
        <span class="unread">Unread</span>
        @endif
    </p>
    @endif
    @if(!empty($data))
    @if(empty($_GET['readstatusid']))
    <div class=" card-content table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <th>idcontrato</th>
            <th>nAnuncio</th>
            <th>tipoContrato</th>
            <th>tipoprocedimento</th>
            <th>objectoContrato</th>
            <th>adjudicatarios</th>
            <th>dataPublicacao</th>
            <th>dataCelebracaoContrato</th>
            <th>precoContratual</th>
            <th>CPV</th>
            <th>prazoExecucao</th>
            <th>localExecucao</th>
            <th>fundamentacao</th>
            </thead>
            <tbody>
            @if(!empty($data) && $data->count())
                @foreach($data as $row)
                    <tr>
                        <td>
                          <a href="#" class="hrlink" > {{ $row->Id }}</a>
                        </td>
                        <td>{{ $row->Data1 }}</td>
                        <td>{{ $row->Data2 }}</td>
                        <td>{{ $row->Data3 }}</td>
                        <td>{{ $row->Data4 }}</td>
                        <td>{{ $row->Data5 }}</td>
                        <td>{{ $row->Winning_company }}</td>
                        <td>{{ $row->Data7 }}</td>
                        <td>{{ $row->Date }}</td>
                        <td>{{ $row->Amount }}</td>
                        <td>{{ $row->CPV }}</td>
                        <td>{{ $row->Data11 }}</td>
                        <td>{{ $row->Data12 }}</td>
                        <td>{{ $row->Data13 }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
            </tbody>
        </table>
        {{-- {!! $data->links() !!} --}}
    </div>
    @endif
    @endif
</div>
@endsection
