    $(document).ready(function(){
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });

    function dostawaPaczkomat() {
        if (document.getElementById("Paczkomat").checked) {
            document.getElementById('paczkomat').style.display = 'block';
        } else {
            document.getElementById('paczkomat').style.display = 'none';
        }
    }
});
