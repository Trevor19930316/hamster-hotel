$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default,
    {
        // 時區
        timeZone: "",
        // 日期顯示格式
        format: 'YYYY-MM-DD',
        // 日期標題格式
        dayViewHeaderFormat: "MMMM YYYY",
        extraFormats: !1,
        stepping: 1,
        minDate: !1,
        maxDate: !1,
        useCurrent: false,
        collapse: !0,
        // 語系設定 en / zh-tw
        locale: moment.locale(), // locale: moment.locale('zh-tw'),
        defaultDate: false,
        disabledDates: !1,
        enabledDates: !1,
        // icon 樣式
        icons: {
            time: "fas fa-clock",
            date: "far fa-calendar-alt",
            up: "fas fa-angle-up",
            down: "fas fa-angle-down",
            previous: "fas fa-angle-left",
            next: "fas fa-angle-right",
            today: "fas fa-calendar-check",
            clear: "fas fa-trash-alt",
            close: "fas fa-times",
        },
        tooltips: {
            today: "Go to today",
            clear: "Clear selection",
            close: "Close the picker",
            selectMonth: "Select Month",
            prevMonth: "Previous Month",
            nextMonth: "Next Month",
            selectYear: "Select Year",
            prevYear: "Previous Year",
            nextYear: "Next Year",
            selectDecade: "Select Decade",
            prevDecade: "Previous Decade",
            nextDecade: "Next Decade",
            prevCentury: "Previous Century",
            nextCentury: "Next Century",
            pickHour: "Pick Hour",
            incrementHour: "Increment Hour",
            decrementHour: "Decrement Hour",
            pickMinute: "Pick Minute",
            incrementMinute: "Increment Minute",
            decrementMinute: "Decrement Minute",
            pickSecond: "Pick Second",
            incrementSecond: "Increment Second",
            decrementSecond: "Decrement Second",
            togglePeriod: "Toggle Period",
            selectTime: "Select Time",
            selectDate: "Select Date"
        },
        useStrict: !1,
        sideBySide: !1,
        daysOfWeekDisabled: !1,
        calendarWeeks: !1,
        viewMode: "days",
        toolbarPlacement: "default",
        // 按鈕開關
        buttons: {
            showToday: true,
            showClear: true,
            showClose: false
        },
        // 時間彈出位置設定
        widgetPositioning: {
            horizontal: "left",
            vertical: "bottom",
        },
        widgetParent: null,
        ignoreReadonly: !1,
        keepOpen: !1,
        focusOnShow: !0,
        inline: !1,
        keepInvalid: !1,
    }
);
