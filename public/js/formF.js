$(document).ready(function() {
    $('#purpose').on('change', function() {
        if (this.value == '1') {
            $("#officeT").show();
            $("#projectT").hide();
        } else {
            $("#officeT").hide();
            $("#projectT").show();
        }
    });
});