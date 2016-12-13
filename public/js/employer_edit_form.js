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
    myDiv.removeClass('hasDatepicker').find("input").each(function () {
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
    //myDiv.find('input[id^="datep"]').addClass("nss_datepickers");
    $(date_pickers).datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-m-d'
    });
    i++;
}
