$(function () {

    checkboxCheckAllStatus('ids[]');
    $("input[name='ids[]']").click(function () {
        checkboxCheckAllStatus('ids[]');
    });

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

    let inputPage = form.find("input[name=page]");
    inputPage.val(page);

    formDisabledNullElements(form);
    form.submit();
}

// checkbox 全選
function checkboxCheckAll(checkboxAll) {
    const checkboxAllStatus = checkboxAll.is(':checked');
    const checkboxName = checkboxAll.attr('name');
    const checkboxes = $("input[name='" + checkboxName + "']");
    checkboxes.prop('checked', checkboxAllStatus);
}

function checkboxCheckAllStatus(checkboxName) {
    const checkboxAll = $("input[name='" + checkboxName + "'].CheckAll");
    const checkboxes = $("input[name='" + checkboxName + "']").not(".CheckAll");
    const checkedBoxes = $("input[name='" + checkboxName + "']:checked").not(".CheckAll");
    checkboxAll.prop("checked", (checkboxes.length === checkedBoxes.length && checkboxes.length !== 0));
}
