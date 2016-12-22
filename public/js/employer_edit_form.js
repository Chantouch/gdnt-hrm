/**
 * Created by Chantouch on 07-Dec-16.
 * Author: Chantouch
 */
function add_row(append_to, copy_from) {
    var i = 1;
    var copy_from_form = "div#" + copy_from + ":first";
    var append_to_form = "div#" + append_to;
    myTr = $(copy_from_form).clone().appendTo(append_to_form);
    myTr.find("input, select").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': ''
        });
    });
    i++;
}

function remove_row(id) {
    if ($(id).length != 1) {
        $(id).last().remove();
    }
}

function add_new_form(date_picker, append_to, copy_from) {
    var i = 1;
    var date_pickers = "." + date_picker;
    var copy_from_form = "div#" + copy_from + ":first";
    var append_to_form = "div#" + append_to;
    $(date_pickers).datepicker('destroy');
    myDiv = $(copy_from_form).clone().appendTo(append_to_form);
    myDiv.removeClass('hasDatepicker').find("input, select").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': function (_, value) {
                return value
            },
        });
    });
    //myDiv.find('input[id^="datep"]').addClass("nss_datepickers");
    $(date_pickers).datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-m-d'
    });
    i++;
}

$(document).ready(function () {
    $("#hand_phone ,#work_phone, #home_phone, #emp_id, #id_emp_notice, #department_code").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    ///also allowed space
    $('#id_card, #passport').keydown(function (e) {
        // -1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190])
        // || /65|67|86|88/.test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
        // || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) && (96 > e.keyCode
        // || 105 < e.keyCode) && e.preventDefault()
        return ((e.keyCode >= 48 && e.keyCode <= 57) || e.keyCode == 8 || e.keyCode == 189
        || e.keyCode == 32 || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode == 37 || e.keyCode == 39);
    });

    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }

});
