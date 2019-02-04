$('.add-to-cart-btn').on('click', function () {

  $.ajax({

    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: { pid: $(this).data('id') },
    success: function (res) { }


  });
});