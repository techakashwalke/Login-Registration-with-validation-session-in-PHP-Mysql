/**
 * Directory – Directory & Listing Bootstrap Theme v. 2.0.0
 * Homepage: https://themes.getbootstrap.com/product/directory-directory-listing-bootstrap-4-theme/
 * Copyright 2021, Bootstrapious - https://bootstrapious.com
 */

"use strict";

$(function () {
    var singleMonth = false;
    if ($(window).width() < 668) {
        singleMonth = true;
    }

    var dateRangeConfig = {
        autoClose: true,
        format: 'MMM D',
        startDate: new Date(),
        selectForward: true,
        applyBtnClass: "btn btn-primary",
        container: ".datepicker-container",
        inline: true,
        singleMonth: singleMonth,
        showDateFilter: function (time, date) {
            return (
                '<div style="padding:5px;">\
                            <span style="">' +
                date +
                "</span>\
                        </div>"
            );
        },
        customOpenAnimation: function (cb) {
            $(this).fadeIn(300, cb);
        },
        customCloseAnimation: function (cb) {
            $(this).fadeOut(300, cb);
        },

        separator : ' to ',
        getValue: function()
        {
            if ($('#check-in').val() && $('#check-out').val() )
                return $('#check-in').val() + ' to ' + $('#check-out').val();
            else
                return '';
        },
        setValue: function(s,s1,s2)
        {
            $('#check-in').val(s1);
            $('#check-out').val(s2);
        }
      

        
    };
    $("#check-in").dateRangePicker(dateRangeConfig);
    $("#check-out").dateRangePicker(dateRangeConfig);
});
