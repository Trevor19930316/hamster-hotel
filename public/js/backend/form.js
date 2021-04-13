$(function () {

    $('form').submit(function (event) {

        const form = $(this);

        if (form.attr('method') === 'get') {
            form.find("input[name='ids[]']").prop('disabled', true);
            form.find("input[type='text'].sorts").prop('disabled', true);
            form.find("input[name='_method']").val('');
            form.find("input[name='_token']").val('');
        }

        formSubmitLoading(form);

        const formName = form.attr('name');

        const disabledNullElements = form.hasClass('disabledNullElements');
        if (disabledNullElements) {
            formDisabledNullElements(form);
        }

        formInvalidElements(formName).done(function (invalidElements) {
            if (invalidElements.length !== 0) {
                scrollToFirstInvalidControl(formName);
                // 表單停止 submit
                event.preventDefault();
                formRemoveLoading(form);
            }
        });
    });
});

// 表單送出 loading
function formSubmitLoading(form) {
    const submitButton = form.find("button[type='submit']");
    submitButton.prepend('<span class="formSubmitLoading"><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;&nbsp;</span>');
    submitButton.prop("disabled", true);
}

// 表單移除 loading
function formRemoveLoading(form) {
    const submitButton = form.find("button[type='submit']");
    submitButton.find("span.formSubmitLoading").remove();
    submitButton.prop("disabled", false);
}

// 表單送出時 空值的 element 變成 disabled
function formDisabledNullElements(form) {

    form.find(":input").filter(function () {
        return !this.value;
    }).attr("disabled", true);

    return true;
}

// 找到 form 的 :invalid 元素
function formInvalidElements(formName) {

    const defer = $.Deferred();

    let form = 'form';

    if (!isUndefined(formName)) {
        form = 'form[name="' + formName + '"]';
    }

    let invalidElements = document.querySelectorAll(form + ' :invalid');
    invalidElements = $(invalidElements);

    defer.resolve(invalidElements);
    return defer.promise();
}

// 滑動至第一個 invalid 元素
function scrollToFirstInvalidControl(formName) {

    let form = 'form';

    if (!isUndefined(formName)) {
        form = 'form[name="' + formName + '"]';
    }

    const firstInvalidControl = document.querySelector(form + ' :invalid, ' + form + ' .is-invalid, ' + form + ' .border-invalid');

    window.scroll({
        top: this.getTopOffset(firstInvalidControl),
        left: 0,
        behavior: "smooth"
    });
}

function getTopOffset(controlEl) {
    const labelOffset = 150;
    return controlEl.getBoundingClientRect().top + window.scrollY - labelOffset;
}
