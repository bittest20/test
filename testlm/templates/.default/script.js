/*Удаление города*/

$.ajaxSetup({
    beforeSend: myFunc,
    complete: myCompleteFunc
});

function myFunc () {
    if (typeof BX !== 'undefinded') {
        BX.showWait();
    }
}

function myCompleteFunc () {
    if (typeof BX !== 'undefinded') {
        BX.closeWait();
    }
}

      $(document).on('click', '.del', function () {
          $(this).prop('disabled', true);

           var id = $(this).attr('data-id');
           var url = $(this).attr('data-url');

            $.post(url, {id}, function (data) {
                     $('[data-id='+id+']').parent().parent().attr('class','bg-danger');
                     $('[data-id='+id+']').remove();
            })
        });
