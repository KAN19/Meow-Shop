$(document).ready(function () {
    //Lam bien mat cai validation cua summernote text area
    // $('.invalid-feedback ').addClass('disappear-overide');
    $("span.invalid-feedback").remove();

    $("#modal-ava-image").on("hide.bs.modal", (event) => {
        const imageLink = $("input#image").val();
        if (imageLink) {
            $("#ava_blank").addClass("d-none");
            $(".btn__edit").addClass("d-inline");
            const imageFullLink = url + imageLink;
            $("#image-ava").attr("src", imageLink);
            console.log(imageFullLink);
        }
    });

    $("#modal-list-images").on("hide.bs.modal", (event) => {
        const imageLinks = $("input#listImages").val();
        let html = "";
        try {
            const arrImages = $.parseJSON(imageLinks);
            for (let i = 0; i < arrImages.length; i++) {
                let realUrl = url + arrImages[i];
                realUrl = realUrl.replace(/\s/g, "%20");
                console.log("real url", realUrl);
                html += `   <div class="col-md-3 mb-4" style=" cursor: pointer;" data-toggle="modal" data-target="#modal-list-images" >
                            <img src=${realUrl}  style="width: 150px; height: 150px; object-fit: cover;">
                        </div>`;
            }
        } catch (error) {
            let realUrl = url + imageLinks;
            realUrl = realUrl.replace(/\s/g, "%20");
            console.log("real url", realUrl);
            html += `   <div class="col-md-3 mb-4" style=" cursor: pointer;" data-toggle="modal" data-target="#modal-list-images">
                            <img src=${realUrl}  style="width: 150px; height: 150px; object-fit: cover;">
                        </div>`;
        }
        console.log(html);
        $("#images-container").html(html);
    });
});
