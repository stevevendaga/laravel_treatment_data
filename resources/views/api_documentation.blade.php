@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bgsize-primary-4 white card-header">
        <h4 class="card-title">Treatment Data API Documentation</h4>
    </div>
    
    <div class="card-body">
        <p>
            Welcome to the Treatment Data API documentation. 
            Our API is a RESTful interface for uploading and retrieving data.
        </p>
        <div class="pull-right">
            <a href="/" style="margin-left:85%" class="linkq"> Upload Data</a>
        </div>
        <div class=" card-content table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <th>URL</th>
                <th>Description</th>
                </thead>
                <tbody>
                        <tr>
                            <td>
                              api/treatments
                            </td>
                            <td>
                                Upload user treatment data
                            </td>
                        </tr>
                        <tr>
                            <td>
                              api/treatments/{id}
                            </td>
                            <td>
                                Get all data for a given contract
                            </td>
                        </tr>
                        <tr>
                            <td>
                              api/treatments/date/{date}
                            </td>
                            <td>
                                Search data based on date
                            </td>
                        </tr>
                        <tr>
                            <td>
                              api/treatments/amount/{amount1}/{amount2}
                            </td>
                            <td>
                                Search data based on amount(range)
                            </td>
                        </tr>
                        <tr>
                            <td>
                            api/treatments/winingcompay/{company}
                            </td>
                            <td>
                                Search data based on winning company
                            </td>
                        </tr>
                        <tr>
                            <td>
                              api/treatments/readstatus/{id}
                            </td>
                            <td>
                               Get contract read status
                            </td>
                        </tr>
                </tbody>
            </table>
            {{-- {!! $data->links() !!} --}}
        </div>
    </div>
</div>
</div>
</div>
@endsection