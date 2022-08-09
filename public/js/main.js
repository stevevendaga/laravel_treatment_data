function CheckFileName() {
    var fileName = document.getElementById("uploaded_file").value
    //debugger;
    if (fileName == "") {
        alert("Browse to upload a valid .xls file");
        return false;
    }
    else if (fileName.split(".")[1].toUpperCase() == "XLS")
        return true;
    else {
        alert("File with " + fileName.split(".")[1] + " is invalid. Upload a valid .xls");
        return false;
    }
    return true;
}

//js to consume the api
$(document).ready(function(){
 
    var mainURL='/api/treatments/';
     // Search by contract id
     $('#btn_search_id').click(function(){
        var dataid = Number($('#id').val().trim());
           if(dataid=='')
           {
               alert('Please enter contract id');
               $('#empTableMain').css('display','none');
               $('#msg').css('display','none');
               return false;
           }
        if(dataid > 0){
          // /api/treatments/{id}
          $.ajax({
             url: mainURL + dataid,
             type: 'GET',
             data: {dataid: dataid},
             dataType: 'json',
             success: function(response){
                var query_type='id';
                createRows(response,query_type,dataid);
             }
          });
        }

     });
//End search by id

// Search by date
$('#btn_search_date').click(function(){
        var dataid = $('#date').val();
          // /api/treatments/date/{date}
          $.ajax({
             url: mainURL+'date/'+dataid,
             type: 'GET',
             data: {dataid: dataid},
             dataType: 'json',
             success: function(response){
                var query_type='date';
                createRows(response,query_type,dataid);
             }
          });
     });
     //End search by date

       // Search by winning company
   $('#btn_search_company').click(function(){
           var dataid = $('#company').val();
           // /api/treatments/winingcompay/{company}
           $.ajax({
               url: mainURL+'winingcompay/'+dataid,
               type: 'GET',
               data: {dataid: dataid},
               dataType: 'json',
               success: function(response){
                var query_type='winning Company';
                   createRows(response,query_type,dataid);
               }
           });
       });
       //End search by winning company
   
       // Search by amount (range)
   $('#btn_search_amount').click(function(){
           var amount1 = $('#amount1').val();
           var amount2 = $('#amount2').val();
           // /api/treatments/amount/{amount1}/{amount2}
           $.ajax({
               url: mainURL+'amount/'+amount1+'/'+amount2,
               type: 'GET',
               data: {amount1: amount1,amount2: amount2},
               dataType: 'json',
               success: function(response){
                var query_type='amount';
                   createRows(response,query_type,amount1 +'-'+amount2);
               }
           });
       });
       //End search by amount
       
       // Get read status by id
   $('#btn_search_readstatus').click(function(){
           var dataid = $('#readstatusid').val();
           // /api/treatments/readstatus/{id}
           $.ajax({
               url: mainURL+'readstatus/'+dataid,
               type: 'GET',
               data: {dataid: dataid},
               dataType: 'json',
               success: function(response){
                   createRows_ReadStatus(response);
               }
           });
       });
       //Get read status
   });

  // Create table rows
  function createRows(response,query_type,_value){
     var len = 0;
     $('#empTableMain tbody').empty(); // Empty <tbody>
     if(response['data'] != null){
        len = response['data'].length;
     }

     if(len > 0){
        //display message for heading
       $("#msg").html('Viewing records by ' + query_type +': '+_value);
       for(var i=0; i<len; i++){
          var id = response['data'][i].id;
          var data1 = response['data'][i].data1;
          var data2 = response['data'][i].data2;
          var data3 = response['data'][i].data3;
          var data4 = response['data'][i].data5;
          var data5 = response['data'][i].data3;
          var winning_company = response['data'][i].winning_company;
          var data7 = response['data'][i].data7;
          var date = response['data'][i].date;
          var amount = response['data'][i].amount;
          var cpv = response['data'][i].cpv;
          var data11 = response['data'][i].data11;
          var data12 = response['data'][i].data12;
          var data13 = response['data'][i].data13;

          var tr_str = "<tr>" +
            "<td align='center'>" + (i+1) + "</td>" +
            "<td align='center'>" + data1 + "</td>" +
            "<td align='center'>" + data2 + "</td>" +
            "<td align='center'>" + data3 + "</td>" +
            "<td align='center'>" + data4 + "</td>" +
            "<td align='center'>" + data5 + "</td>" +
            "<td align='center'>" + winning_company + "</td>" +
            "<td align='center'>" + data7 + "</td>" +
            "<td align='center'>" + date + "</td>" +
            "<td align='center'>" + amount + "</td>" +
            "<td align='center'>" + cpv + "</td>" +
            "<td align='center'>" + data11 + "</td>" +
            "<td align='center'>" + data12 + "</td>" +
            "<td align='center'>" + data13 + "</td>" +
          "</tr>";
           $("#empTableMain").css('display','block');
           $("#table-readstatus").css('display','none');
          $("#empTableMain tbody").append(tr_str);
       }
     }else{
        var tr_str = "<tr>" +
          "<td align='center' colspan='4' style='color:red'>No record found.</td>" +
        "</tr>";

        $("#empTableMain tbody").append(tr_str);
     }
  } 
  //function for read status only
  function createRows_ReadStatus(response){
     var len = 0;
     $('#table-readstatus  tbody').empty(); // Empty <tbody>
     if(response['data'] != null){
        len = response['data'].length;
     }
     if(len > 0){
       $("#empTableMain").css('display','none');
       $("#table-readstatus").css('display','block');
       for(var i=0; i<len; i++){
          var id = response['data'][i].id;
          var readstatus = response['data'][i].read_status;
          var tr_str = "<tr>" +
            "<td align='center'>" + id + "</td>" +
            "<td align='center'>" + readstatus + "</td>" +
          "</tr>";
          $("#table-readstatus tbody").append(tr_str);
       }
     }else{
        var tr_str = "<tr>" +
          "<td align='center' colspan='4' style='color:red'>No record found.</td>" +
        "</tr>";

        $("#table-readstatus tbody").append(tr_str);
     }
   }

