$(function () {

    // file input
    $(".custom-file-input").on("change", function () {
        const fileName = $(this).val().split("\\").pop();
        if (fileName !== '') {
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        }
    });

});
