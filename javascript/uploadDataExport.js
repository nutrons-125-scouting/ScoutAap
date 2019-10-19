exports = {};
exports.load = function(){
	document.getElementById('uploadExportedData').addEventListener('click', exports.upload, false);
}

// Uploads data file to server
exports.upload = function() {
    var fileUpload = document.getElementById('dataUploadFileINPUT');
    if(typeof fileUpload.files[0] === 'undefined') {
        return;
    }
    var file = fileUpload.files[0];
    var reader = new FileReader();
    reader.readAsText(file);
    reader.onload = function() {
        try {
            var dataStr = reader.result;
            match.reader = reader;
            var data = JSON.parse(dataStr);
            for (var i=0; i<data.length; i++) {
                localStorage[localStorage.length] = JSON.stringify(data[i]);
            }
        }
        catch(err) {
            alert("The file was invalid!");
            return;
         }
        match.submitFromLocalstorage();
        document.getElementById('dataUploadFileINPUT').value = '';
    }

}

window.addEventListener('DOMContentLoaded', exports.load, false);