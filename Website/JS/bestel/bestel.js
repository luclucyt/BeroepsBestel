let totaalPrijs = 0

function add(naam, prijs, foto) {

    let cartTemplate = '<div class="cart-item-wrapper"><div class="cart-item-info-wrapper"><img class="cart-item-img" src="images/bestel/'+ foto + '" alt=""><div><h1 class="cart-item-name">' + naam + '</h1><div class="cart-item-amount-wrapper"><label for="hoeveel">Hoeveelheid:</label><input type="number" name="hoeveel" min="1" class="cart-item-amount" value="1"></div></div></div><div class="cart-item-price-wrapper"><h1 class="cart-item-price">€ ' + prijs + '</h1><button class="cart-item-delete" onclick="remove(' + prijs +')">X</button></div></div>'
    let cartMainWrapper = document.getElementsByClassName('cart-main-product-wrapper')[0]

    //add the product to the cart
    cartMainWrapper.innerHTML += cartTemplate

    let prijs_totaal = document.getElementById('prijs-totaal')
    totaalPrijs += prijs
    let cartTotaalPrijs = totaalPrijs.toFixed(2)
    prijs_totaal.innerHTML = 'Totaal prijs: € ' + cartTotaalPrijs



    let cartItemDeleteBTN = document.getElementsByClassName('cart-item-delete')

    //remove the product from the cart
    for (let i = 0; i < cartItemDeleteBTN.length; i++) {
        cartItemDeleteBTN[i].addEventListener('click', function() {
            console.log(this.parentNode.parentNode)
            this.parentNode.parentNode.remove()
        })
    }


    //change the amount of the product in the cart
    let cartItemAmount = document.getElementsByClassName('cart-item-amount')
    for (let i = 0; i < cartItemAmount.length; i++) {
        cartItemAmount[i].addEventListener('change', function() {
            let cartItemAmountValue = this.value
            let cartItemPrice = document.getElementsByClassName('cart-item-price')[i]

            cartItemPrice.innerHTML = '€ ' + (prijs * cartItemAmountValue).toFixed(2)



            //recalculate the total price
            totaalPrijs = 0
            let cartItemPriceArray = document.getElementsByClassName('cart-item-price')
            for (let i = 0; i < cartItemPriceArray.length; i++) {
                let cartItemPriceValue = cartItemPriceArray[i].innerHTML.replace('€ ', '')
                totaalPrijs += parseFloat(cartItemPriceValue)

                let cartTotaalPrijs = totaalPrijs.toFixed(2)
                prijs_totaal.innerHTML = 'Totaal prijs: € ' + cartTotaalPrijs
            }
        })
    }
}


function remove(prijs) {
    let prijs_totaal = document.getElementById('prijs-totaal')

    //recalculate the total price
    totaalPrijs = 0
    let cartItemPriceArray = document.getElementsByClassName('cart-item-price')
    for (let i = 0; i < cartItemPriceArray.length; i++) {
        let cartItemPriceValue = cartItemPriceArray[i].innerHTML.replace('€ ', '')
        totaalPrijs += parseFloat(cartItemPriceValue)

        let cartTotaalPrijs = totaalPrijs.toFixed(2)
        prijs_totaal.innerHTML = 'Totaal prijs: € ' + cartTotaalPrijs
    }
}
