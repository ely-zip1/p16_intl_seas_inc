/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */



$(document).ready(function() {

    $('#row_deposit').hide();

    // $('#tooltip_copy').hide();

    $('#package-1').click(function() {
        if ($('#plan-1').is(':hidden') == true) {

            $('#row_deposit').show();

            $('#plan-1').removeAttr('hidden', true);
            $('#plan-2').attr('hidden', true);
            $('#plan-3').attr('hidden', true);
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan1")
            $('#deposit-amount').val("100");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan1")
            $('#deposit-amount').val("100");
            $('#deposit-amount').focus();
        }
    });

    $('#package-2').click(function() {
        if ($('#plan-2').is(':hidden') == true) {

            $('#row_deposit').show();

            $('#plan-1').attr('hidden', true);
            $('#plan-2').removeAttr('hidden');
            $('#plan-3').attr('hidden', true);
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan2")
            $('#deposit-amount').val("1000");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan2")
            $('#deposit-amount').val("1000");
            $('#deposit-amount').focus();
        }
    });

    $('#package-3').click(function() {
        if ($('#plan-3').is(':hidden') == true) {

            $('#row_deposit').show();

            $('#plan-1').attr('hidden', true);
            $('#plan-2').attr('hidden', true);
            $('#plan-3').removeAttr('hidden');
            $('#plan-4').attr('hidden', true);
            $('#default').attr('hidden', true);

            $('#dropdown_plan').val("plan3")
            $('#deposit-amount').val("10000");
            $('#deposit-amount').focus();
        } else {
            $('#dropdown_plan').val("plan3")
            $('#deposit-amount').val("10000");
            $('#deposit-amount').focus();
        }
    });

    $('#TextToCopy').click(function() {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#affiliate-link').text()).select();
        document.execCommand("copy");
        $temp.remove();
    });

});