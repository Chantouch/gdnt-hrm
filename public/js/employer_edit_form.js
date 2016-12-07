/**
 * Created by Chantouch on 07-Dec-16.
 * Author: Chantouch
 */
function add_row(clazz, id, sub_id) {
    var i = 1;
    $(clazz).datepicker('destroy');
    myTr = $(sub_id).clone().appendTo(id);
    myTr.removeClass('hasDatepicker').find("input").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': function (_, value) {
                return value
            }
        });
    });
    //myTr.find('input[id^="datep"]').addClass("nss_datepickers");
    $(clazz).datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-m-d'
    });
    i++;
}

function nss_add_row() {
    var i = 1;
    $('.nss_date_pickers').datepicker('destroy');
    myTr = $("div#nss_form:first").clone().appendTo("div#nss_form_add");
    myTr.removeClass('hasDatepicker').find("input").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': function (_, value) {
                return value
            }
        });
    });
    //myTr.find('input[id^="datep"]').addClass("nss_datepickers");
    $(".nss_date_pickers").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-M-d'
    });
    i++;
}

function add_out_frame() {
    var i = 1;
    $('.mydatepickers').datepicker('destroy');
    myTr = $("div#add_frame:first").clone().appendTo("div#more_frame");
    myTr.removeClass('hasDatepicker').find("input").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': function (_, value) {
                return value
            }
        });
    });
    //myTr.find('input[id^="datep"]').addClass("mydatepickers");
    $(".mydatepickers").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-m-d'
    });
    i++;
}

function remove_row(id) {
    if ($(id).length != 1) {
        $(id).last().remove();
    }
}


function add_new_row(date_picker, form, append_id) {
    var i = 1;
    $('.hpj_date_picker').datepicker('destroy');
    myTr = $("div#hpj_add_form:first").clone().appendTo("div#hpj_form");
    myTr.removeClass('hasDatepicker').find("input").each(function () {
        $(this).attr({
            'id': function (_, id) {
                return id + i
            },
            'name': function (_, name) {
                return name
            },
            'value': function (_, value) {
                return value
            }
        });
    });
    //myTr.find('input[id^="datep"]').addClass("nss_datepickers");
    $(".hpj_date_picker").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-M-d'
    });
    i++;
}
