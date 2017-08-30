function DisableSpecificDates(date) {
    var m = date.getMonth();
    var d = date.getDate();
    var y = date.getFullYear();

    // First convert the date in to the dd-mm-yyyy format 
    // Take note that we will increment the month count by 1 
    var currentdate = d + '-' + (m + 1) + '-' + y;

    // We will now check if the date belongs to disableddates array 
    for (var i = 0; i < disableddates.length; i++) {

        // Now check if the current date is in disabled dates array. 
        if ($.inArray(currentdate, disableddates) != -1) {
            return [false];
        } else
            return [true];
    }

}
/*
$(function() {
    $("#datepicker").datepicker({
        beforeShowDay: DisableSpecificDates
    });
});
$(function() {
    $("#datepicker1").datepicker({
        beforeShowDay: DisableSpecificDates
    });
});*/
/*var disabledDate1 = new Date(2017, 3, 22);
 */
var disabledDate2 = new Date(0, 0, 0);
var disabledDatesArray = [disabledDate2];
/*var specialDates = {
    "classC": new Date(2017, 3, 10),
    "classD": new Date(2017, 3, 15)
};*/
$(function() {
    $("#datepicker").datepicker({
        minDate: 0,
        //dateFormat: "yyyy-mm-dd",
        // numberOfMonths: [3, 1],
        beforeShowDay: beforeShow,
        onSelect: function(dateText, inst) {
            var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#input1").val());
            var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#input2").val());
            var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);



            if (!date1 || date2) {
                selectFirstDate(dateText, this);
            } else if (selectedDate < date1) {
                for (var cssClass in disabledDatesArray) {
                    var disabledDate = disabledDatesArray[cssClass];
                    if ((selectedDate < disabledDate && date1 > disabledDate)) {

                        selectFirstDate(dateText, this);
                        return;
                    }

                }
                $("#input2").val($("#input1").val());
                $("#input1").val(dateText);
                $(this).datepicker();
            } else {
                for (var cssClass in disabledDatesArray) {
                    var disabledDate = disabledDatesArray[cssClass];
                    if ((selectedDate > disabledDate && date1 < disabledDate)) {

                        selectFirstDate(dateText, this);
                        return;
                    }
                    $("#input2").val(dateText);
                    $(this).datepicker();
                }
            }
        }
    });

    function getDisabledClass(date) {
        for (var cssClass in disabledDatesArray) {
            var disabledDate = disabledDatesArray[cssClass];

            if (date.getMonth() == disabledDate.getMonth() && date.getDate() == disabledDate.getDate() && date.getFullYear() == disabledDate.getFullYear()) {
                return cssClass;
            }

        }
        return null;
    }


    function beforeShow(date) {
        var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#input1").val());
        var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#input2").val());
        var cssClass = getDisabledClass(date);
        var isEnabled = (cssClass == null);

        if (isEnabled) {
            //cssClass = getSpecialClass();
            cssClass = null;
            if (cssClass == null) return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
            else {
                cssClass += date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? " dp-highlight" : "";
                return [true, cssClass];
            }
        } else return [false, cssClass];

    }

    function selectFirstDate(dateText, datePicker) {
        $("#input1").val(dateText);
        $("#input2").val("");
        $(datePicker).datepicker();
    }
});