$( document ).ready(function() {
    $('.btn-xoa').click(function (e) {
        // lay duoc data-id
        // tao bien luu id
        //var id = $(this).data('id');
        var id = $(this).attr('data-id');

        window.location.href = "http://mvc.local/index.php?controller=bo-phan&action=delete&id="+id;
    });
});