$(function () {

    // file input
    $(".custom-file-input").on("change", function () {
        const fileName = $(this).val().split("\\").pop();
        if (fileName !== '') {
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        }
    });

    /* isColored */
    // input 輸入內容顯示顏色
    const isColoredInputs = $("input.isColored");
    isColoredInputs.on('change', function () {
        const inputColoredValue = $(this).val();
        if (inputColoredValue === '') {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
    isColoredInputs.trigger('change');

    // selected 顯示顏色
    const isColoredSelect = $('select.isColored');
    isColoredSelect.on('change', function () {
        let valueSelected = this.value;
        if (valueSelected !== '') {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
    isColoredSelect.trigger("change");
});

function paginationChangePage(form, page) {

    let inputPage = form.find("input[name=currentPage]");
    inputPage.val(page);

    formDisabledNullElements(form);
    form.submit();
}
