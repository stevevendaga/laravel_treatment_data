@extends('layouts.app')

<div class="searchbar">
    @include('searchbar')
</div>
@section('content')
{{-- @if(empty($responseBody))
 @foreach ($responseBody as $response)
<h1>{{ $response->message }}</h1>
@endforeach 
@endif --}}
<div class="card">
    <div class="card-header bgsize-primary-4 white card-header">
        <h4 class="card-title">Treatment Data</h4>
    </div>
    <div class="card-body">
        <div class="pull-right">
            <a href="{{url("getdata")}}" class="btn btn-primary" style="margin-left:85%">Get Data</a>
        </div>
        <div class=" card-content table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <th>Customer Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                </thead>
                <tbody>
                 @if(!empty($treatments) && $treatments->count())
                    @foreach($treatments as $row)
                        <tr>
                            <td>{{ $row->Id }}</td>
                            <td>{{ $row->Data1 }}</td>
                            <td>{{ $row->Data2 }}</td>
                            <td>{{ $row->Data3 }}</td>
                            <td>{{ $row->Data4 }}</td>
                            <td>{{ $row->Data5 }}</td>
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
    </div>
</div>
</div>
</div>
@endsection