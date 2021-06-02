function moreImages() {
    i++;
    var current = document.getElementById("imagesJs").innerHTML;
    var text = '<input class="chooseFile" type="file" name="houseimg[]" id="fileToUpload">';
    document.getElementById("imagesJs").innerHTML = current + text;
}
var i = 0;