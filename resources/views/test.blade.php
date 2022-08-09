<!DOCTYPE html>
<html>

<body>
   <input type='text' id='id' name='search' placeholder='Enter userid 1-7'>
   <input type='button' value='Search' id='but_search'>
   <br/>
   <input type='button' value='Fetch all records' id='but_fetchall'>
 
   <!-- Table -->
   <table border='1' id='empTable' style='border-collapse: collapse;'>
     <thead>
       <tr>
         <th>S.no</th>
         <th>Username</th>
         <th>Name</th>
         <th>Email</th>
       </tr>
     </thead>
     <tbody></tbody>
   </table>
 
   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
   <script type='text/javascript'>
   $(document).ready(function(){
 
      // Fetch all records
      $('#but_fetchall').click(function(){
 
         // AJAX GET request
         $.ajax({
           url: '/getUsers',
           type: 'get',
           dataType: 'json',
           success: function(response){
 
              createRows(response);
 
           }
         });
      });
 
      // Search by userid
      $('#but_search').click(function(){
         var dataid = Number($('#id').val().trim());
 
         if(dataid > 0){
 
           // AJAX POST request
           $.ajax({
              url: '/api/treatments/'+dataid,
              type: 'POST',
              data: {dataid: dataid},
              dataType: 'json',
              success: function(response){
 
                 createRows(response);
 
              }
           });
         }
 
      });
 
   });
 
   // Create table rows
   function createRows(response){
      var len = 0;
      $('#empTable tbody').empty(); // Empty <tbody>
      if(response['data'] != null){
         len = response['data'].length;
      }
 
      if(len > 0){
        for(var i=0; i<len; i++){
           var id = response['data'][i].id;
           var username = response['data'][i].data1;
           var name = response['data'][i].data2;
           var email = response['data'][i].data3;
 
           var tr_str = "<tr>" +
             "<td align='center'>" + (i+1) + "</td>" +
             "<td align='center'>" + username + "</td>" +
             "<td align='center'>" + name + "</td>" +
             "<td align='center'>" + email + "</td>" +
           "</tr>";
 
           $("#empTable tbody").append(tr_str);
        }
      }else{
         var tr_str = "<tr>" +
           "<td align='center' colspan='4'>No record found.</td>" +
         "</tr>";
 
         $("#empTable tbody").append(tr_str);
      }
   } 
   </script>
</body>
</html>