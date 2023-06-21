function previewImages() {
    //var i;
    if (this.files) {
        var i = previewImagesSetup.badgeNumberStartAt ;
        $("#"+previewImagesSetup.imageDivId).empty();
        [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } // else...

        var reader = new FileReader();

        reader.addEventListener("load", function() {
            var html = "";
            html += "<div class='col'>";
            html += "<div class='card'>";
            html += "<img class='card-img-top' src='"+this.result+"'' alt='Image Format Error' >";
            html += previewImagesSetup.isShowNumberBadge?"<span class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark'>"+ i++ +"</span>":"";
            html += "</div>";
            html += "</div>";
            $("#"+previewImagesSetup.imageDivId).append(html);
        });

        reader.readAsDataURL(file);

    }
}

document.querySelector('#'+previewImagesSetup.inputFileName).addEventListener("change", previewImages);
