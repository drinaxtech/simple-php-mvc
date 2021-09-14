

function addToCart(el, price){
    let id = $('#quantity').attr('data-productId');
    let quantity = $('#quantity').val();
    let name = $('#product-name').text();
    let data = {
        id: id,
        name: name,
        quantity: quantity,
        price: price
    };

    $.post(BASE_URL  + 'product/add_to_basket', data, function(data){
        $('#items-to-card').text(data);
        alertify['success']('Added to basket');
    });
}