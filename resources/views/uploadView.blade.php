@extends('layouts.app')

@section('content')
<body class="antialiased">
        <div class="container">
            <div class="card-header bg-secondary dark bgsize-darken-4 white card-header">
                <h4 class="text-white">Upload Treatment Data
                    <span style="float: right">
                      <a href="/index" class="linkq"> Query Data</a>
                    </span>

                </h4>
            </div>
            <div class="row justify-content-centre" style="margin-top: 4%">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bgsize-primary-4 white card-header">
                            <h4 class="card-title">Import Excel Data</h4>
                        </div>
                        <div class="card-body">
                            {{-- @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                <br>
                            @endif --}}
                            <form action="/uploadnow" method="POST" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <label>Select File to Upload  <small class="warning text-muted">{{__('Please upload only Excel (.xls) files')}}</small></label>
                                    <div class="input-group">
                                        <input type="file" required class="form-control" 
                                            name="uploaded_file" id="uploaded_file" required="required"
                                            onchange="return CheckFileName();"
                                        >
                                        @if ($errors->has('uploaded_file'))
                                            <p class="text-right mb-0">
                                                <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                                            </p>
                                        @endif
                                        <div class="input-group-append" id="button-addon2">
                                            <button class="btn btn-primary square" onclick="return CheckFileName();" type="submit"><i class="ft-upload mr-1"></i> Upload</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection

