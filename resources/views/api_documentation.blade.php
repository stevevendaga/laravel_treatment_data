@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bgsize-primary-4 white card-header">
        <h4 class="card-title">Treatment Data API Documentation</h4>
    </div>
    <p>
        Welcome to the Treatment Data API documentation. 
        Our API is a RESTful interface for uploading and retrieving data.
    </p>
    <div class="card-body">
        <div class="pull-right">
            <a href="" class="btn btn-primary" style="margin-left:85%">Upload Data</a>
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

                            </td>
                            <td>
                                
                            </td>
                            <td>
                                
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