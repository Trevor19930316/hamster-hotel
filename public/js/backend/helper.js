// modal Show
function modalShow(modalName) {
    $('.modal.' + modalName).modal('show');
}

// modal Hide
function modalHide(modalName) {
    $('.modal.' + modalName).modal('hide');
}

function isUndefined(variable) {
    return typeof variable == 'undefined';
}

// form 表單送出時 空值的 element 變成 disabled
function formDisabledNullElements(form) {

    form.find(":input").filter(function () {
        return !this.value;
    }).attr("disabled", true);

    return true;
}
