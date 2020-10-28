function printDate(){
    var d = new Date();
    var n = d.getDate();
    var y = d.getFullYear();
    var m = d.getMonth()+1;
    var date = "Uploaded: "+m+"-"+n+"-"+y;
    document.getElementById("dateLoc").innerHTML = date;
}

function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("fileToUpload").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("preview").src = oFREvent.target.result;
    };
};