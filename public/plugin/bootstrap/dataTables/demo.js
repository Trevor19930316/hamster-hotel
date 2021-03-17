// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable({
        "searching": false,//關閉filter功能
        "pageLength": 10,
        "lengthMenu": [10, 50, 100],//下拉選單每頁顯示幾筆
        "columns": [
            { "data": "username" },
            { "data": "name" },
            { "data": "surname" },
            { "data": "status" },
            { "data": "emailAddress" },
            { "data" : "userId" }
        ],
        "aoColumnDefs": [
            {
                "aTargets": [5],
                "mData": "userId",
                "mRender": function (data, type, full) {
                    return '<button href="#"' + 'id="'+ data + '">Edit</button>';
                }
            }
        ]
    });

});