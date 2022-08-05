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