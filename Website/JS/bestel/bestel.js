function add(naam, prijs, foto) {
    let cartTemplate = '<div class="cart-item-wrapper"><div class="cart-item-info-wrapper"><img class="cart-item-img" src="images/bestel/'+ foto + '" alt=""><div><h1 class="cart-item-name">' + naam + '</h1><div class="cart-item-amount-wrapper"><label for="hoeveel">Hoeveelheid:</label><input type="number" name="hoeveel" min="1" class="cart-item-amount"></div></div></div><div class="cart-item-price-wrapper"><h1 class="cart-item-price">€ ' + prijs + '</h1><button class="cart-item-delete">X</button></div></div>'
    let cartMainWrapper = document.getElementsByClassName('cart-main-product-wrapper')[0]

    cartMainWrapper.innerHTML += cartTemplate
}
