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
