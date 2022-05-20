<script type="text/javascript">
    $(document).ready(function() {

    });



    function viewImages(menu, image, height, width) {

        var modalName = menu.charAt(0).toUpperCase() + menu.slice(1);
        console.log(modalName);
        var bodyModal = '';
        $('#modalBody' + modalName + '').html('');
        if (image != '' && image != null) {
            bodyModal += '<div class="zoom"><center><img src="data:image/jpeg;base64,' + image + '" style="height: ' + height + 'px; width: ' + width + 'px;" /> </center> </div>';
        }

        $('#modalBody' + modalName + '').html(bodyModal);
        $('#showModal' + modalName + '').modal('show');
    }
</script>

<style>
    .zoom:hover {
        -ms-transform: scale(1.5);
        /* IE 9 */
        -webkit-transform: scale(1.5);
        /* Safari 3-8 */
        transform: scale(1.5);
    }
</style>