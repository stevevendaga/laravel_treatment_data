<div class="card-header bg-secondary dark bgsize-darken-4 white card-header">
    <h4 class="text-white">Query Data
        <span style="float: right">
          <a href="/" class="linkq"> Upload Data</a>
        </span>
    </h4>
</div>
<p></p>
<div class="row">
    <div class="col-md-3">
        <!-- searc data by id -->
    <form method="GET">
        <label>Search by date</label>
        <div class="input-group">
            <input type="date" required class="form-control" 
                name="date" id="date">
            <div class="input-group-append" id="button-addon2">
                <button class="btn btn-primary square" type="button" id="btn_search_date">
                    <i class="ft-upload mr-1"></i> Search</button>
            </div>
        </div>
    </form>
      <!-- searc data by id -->
      <form method="GET">
        <label>Search by winning company</label>
        <div class="input-group">
            <input type="text" required class="form-control" 
                name="company" id="company" placeholder="Company name">
            <div class="input-group-append" id="button-addon2">
                <button class="btn btn-primary square" type="button" id="btn_search_company">
                    <i class="ft-upload mr-1"></i> Search</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3">
        <!-- searc data by amount -->
    <form method="GET">
        <label>Search by amount</label><br>
        Between 
        <input type="number" min="0" name="amount1" id="amount1" 
            required class="form-control" placeholder="Amount">
        to <div class="input-group">
            <input type="number" required class="form-control" 
                name="amount2" id="amount2" min="0" placeholder="Amount">
            <div class="input-group-append" id="button-addon2">
                <button class="btn btn-primary square" type="button" id="btn_search_amount">
                    <i class="ft-upload mr-1"></i> Search</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3">
        <!-- Get data by contract id -->
    <form method="GET">
        <label>Get data by contract id</label>
        <div class="input-group">
            <input type="text" required class="form-control" 
                name="id" placeholder="Id" id="id">
            <div class="input-group-append" id="button-addon2">
            <button class="btn btn-primary square" type="button"
                 id="btn_search_id">
                    <i class="ft-upload mr-1"></i> Get</button>
            </div>
        </div>
    </form>
      <!-- get contract id read status data by id -->
      <form method="GET">
        <label>Get contract read status</label>
        <div class="input-group">
            <input type="text" required class="form-control" 
                name="readstatusid" id="readstatusid" placeholder="Id">
            <div class="input-group-append" id="button-addon2">
                <button class="btn btn-primary square" type="button" id="btn_search_readstatus">
                    <i class="ft-upload mr-1"></i> Get</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3">
        <!-- get contract id read status data by id -->
      <form action="getDataUploadStatus" method="GET">
        <label>Track upload status</label>
        @csrf
        <div class="input-group">
            <input type="text" required class="form-control" 
                name="filemane" placeholder="Upload Filename">
            <div class="input-group-append" id="button-addon2">
                <button class="btn btn-primary square" type="submit">
                    <i class="ft-upload mr-1"></i> Get</button>
            </div>
        </div>
    </form>
</div>

