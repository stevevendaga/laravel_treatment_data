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


$(function () { 
    var url='/api/treatments/winingcompay/';
    $("#search").bind("keydown", function (event) {
        if (event.keyCode === $.ui.keyCode.TAB &&
        $(this).data("ui-autocomplete").menu.active) {
            event.preventDefault();
        }
    })
    .autocomplete({
        minLength: 2,
        source: function (request, response) {
            $.getJSON(url, {
                term: extractLast(request.term)
            }, response);
        },
    });
});
function split(val) {
    return val.split(/,\s*/);
}
function extractLast(term) {
    return split(term).pop();
}
$(document).ready(function()
{
    $('[data-toggle="popover"]').popover();
});