function displayCartProducts() {
    let cartContainer = document.getElementById('header-cart');
    let cartItems = localStorage.length + 10;

    // Golește conținutul containerului de produse din coș
    cartContainer.innerHTML = '';


    // Creează elementul <ul> cu clasa "mini-products-list"
    let productList = document.createElement('ul');
    productList.classList.add('mini-products-list');


    // Parcurge fiecare produs din localStorage
    for (let i = 1; i <= cartItems; i++) {
        let key = 'product' + i;
        let productData = JSON.parse(localStorage.getItem(key));

        if (productData === null) {
            continue; // Treci la următoarea iterație a buclei
        }

        let image = productData.image;
        let name = productData.name;
        let quantity = productData.quantity;
        let price = productData.price;
        let aroma = productData.aroma;
        let color = productData.color;
        let options = productData.options;


        // Crează elementele HTML pentru produs
        let listItem = document.createElement('li');
        listItem.classList.add('item');
        listItem.id = key;

        let productImage = document.createElement('a');
        productImage.classList.add('product-image');
        productImage.href = '#';

        let imageElement = document.createElement('img');
        imageElement.src = image;
        imageElement.alt = name;
        imageElement.title = '';

        let productDetails = document.createElement('div');
        productDetails.classList.add('product-details');

        let removeLink = document.createElement('a');
        removeLink.classList.add('remove');
        removeLink.innerHTML = '<i class="anm anm-times-l" aria-hidden="true"></i>';
        removeLink.addEventListener('click', function () {
            let listItem = this.closest('li');
            if (localStorage.getItem(key)) {
                // Șterge elementul din Local Storage
                localStorage.removeItem(key);
                productList.removeChild(listItem);
                updateCartSubtotal();
            }
        });

        let productName = document.createElement('a');
        productName.classList.add('pName');
        productName.href = 'cart.html';
        productName.textContent = name;

        let variant = document.createElement('div');
        variant.classList.add('variant-cart');
        variant.textContent = aroma + ' / ' + color + ' / ' + options;

        let priceRow = document.createElement('div');
        priceRow.classList.add('priceRow');

        let productPrice = document.createElement('div');
        productPrice.classList.add('product-price');

        let priceSpan = document.createElement('span');
        priceSpan.classList.add('money');
        priceSpan.textContent = quantity + ' x ' + price + ' Mdl';

        // Adaugă elementele create în structura DOM
        productImage.appendChild(imageElement);

        priceRow.appendChild(productPrice);

        productPrice.appendChild(priceSpan);

        productDetails.appendChild(removeLink);
        // productDetails.appendChild(editLink);
        productDetails.appendChild(productName);
        productDetails.appendChild(variant);
        productDetails.appendChild(priceRow);

        listItem.appendChild(productImage);
        listItem.appendChild(productDetails);

        productList.appendChild(listItem);

        cartContainer.appendChild(productList);

    }


    // Creează secțiunea cu subtotalul și butoanele
    let totalDiv = document.createElement('div');
    totalDiv.classList.add('total');

    let totalInDiv = document.createElement('div');
    totalInDiv.classList.add('total-in');

    let subtotalLabel = document.createElement('span');
    subtotalLabel.classList.add('label');
    subtotalLabel.textContent = 'Cart Subtotal:';

    let subtotalPriceSpan = document.createElement('span');
    subtotalPriceSpan.classList.add('product-price');

    let subtotalMoneySpan = document.createElement('span');
    subtotalMoneySpan.classList.add('money');
    subtotalMoneySpan.textContent = '00.00';

    subtotalPriceSpan.appendChild(subtotalMoneySpan);
    totalInDiv.appendChild(subtotalLabel);
    totalInDiv.appendChild(subtotalPriceSpan);

    let buttonSetDiv = document.createElement('div');
    buttonSetDiv.classList.add('buttonSet', 'text-center');

    let viewCartLink = document.createElement('a');
    viewCartLink.href = cartUrl;
    viewCartLink.classList.add('btn', 'btn-secondary', 'btn--small');
    viewCartLink.textContent = 'View Cart';

    let checkoutLink = document.createElement('a');
    checkoutLink.href = checkoutUrl;
    checkoutLink.classList.add('btn', 'btn-secondary', 'btn--small');
    checkoutLink.textContent = 'Checkout';

    buttonSetDiv.appendChild(viewCartLink);
    buttonSetDiv.appendChild(checkoutLink);

    totalDiv.appendChild(totalInDiv);
    totalDiv.appendChild(buttonSetDiv);

    // Adaugă secțiunea cu subtotalul și butoanele în containerul coșului
    cartContainer.appendChild(totalDiv);

    // Actualizează subtotalul în coș
    updateCartSubtotal();
}

function updateCartSubtotal() {
    let cartItems = localStorage.length + 10;
    let subtotal = 0;

    // Calculează subtotalul adunând prețurile produselor din coș
    for (let i = 1; i <= cartItems; i++) {
        let productData = JSON.parse(localStorage.getItem('product' + i));

        if (productData === null) {
            continue; // Treci la următoarea iterație a buclei
        }

        let price = parseFloat(productData.price);
        let quantity = productData.quantity;
        subtotal += price*quantity;
    }

    // Actualizează subtotalul în codul HTML
    let subtotalElement = document.querySelector('.total-in .product-price .money');
    if (subtotalElement) {
        subtotalElement.textContent = subtotal.toFixed(2) + ' Mdl';
        try{document.getElementById('subtotal').textContent = subtotal.toFixed(2) + ' Mdl';}catch (e) {}
        try{document.getElementById('totalCheckout').textContent = (subtotal+50) ;}catch (e) {}


    }

    localStorage.getItem('note') !== null ? count = localStorage.length-1 :  count = localStorage.length;
    document.getElementById('CartCount').innerHTML=count

}

// Apelează funcția pentru afișarea produselor în coș
displayCartProducts();


function addToCart() {
    let addToCartButton = document.querySelector('.btn.product-form__cart-submit');
    addToCartButton.addEventListener('click', function () {
        let price = document.getElementById('price').value;
        let name = document.querySelector('.product-single__title').innerHTML;
        let quantity = document.getElementById('items').value;
        let image = document.querySelector('.blur-up.zoompro.ls-is-cached.lazyloaded').src;
        let aroma = document.getElementsByClassName('slVariant')[0].innerHTML
        let color = document.getElementsByClassName('slVariant')[1].innerHTML
        let options = document.getElementsByClassName('slVariant')[2].innerHTML

        function verifyKey(productsStorage) {
            var testKey = 'product' + (productsStorage + 1);
            var lastKey = localStorage.getItem(testKey);

            if (lastKey !== null) {
                return verifyKey(productsStorage + 1);
            } else {
                return testKey;
            }
        }

        var productsStorage = localStorage.length;
        var nextKey = verifyKey(productsStorage);
        // console.log("Next key:", nextKey);

        localStorage.setItem(nextKey, JSON.stringify({
            image,
            name,
            quantity,
            price,
            aroma,
            color,
            options
        }));

        // Afisarea mesajului de succes
        let successMessage = document.createElement('div');
        successMessage.classList.add('alert', 'alert-success', 'text-uppercase');
        successMessage.setAttribute('role', 'alert');
        successMessage.innerHTML = '<i class="icon anm anm-check icon-large"></i> &nbsp;<strong>' + quantity + ' × "' + name + '"</strong> au fost adăugate în coș!';
        document.getElementById('ProductSection-product-template').insertBefore(successMessage, document.getElementById('ProductSection-product-template').firstChild);

        // Ascunderea mesajului după 10 secunde
        setTimeout(function () {
            successMessage.style.display = 'none';
        }, 10000);

        displayCartProducts();

    });
}

try {
    addToCart();
} catch (e) {
}


function addOptions() {
    var swatchElementsAroma = document.getElementsByClassName('aroma');

    for (var i = 0; i < swatchElementsAroma.length; i++) {
        swatchElementsAroma[i].addEventListener('click', function () {
            var value = this.dataset.value;

            var slVariantElement = document.getElementsByClassName('slVariant')[0];
            slVariantElement.innerHTML = value;
        });
    }

    var swatchElementsColor = document.getElementsByClassName('color');

    for (var i = 0; i < swatchElementsColor.length; i++) {
        swatchElementsColor[i].addEventListener('click', function () {
            var value = this.dataset.value;

            var slVariantElement = document.getElementsByClassName('slVariant')[1];
            slVariantElement.innerHTML = value;
        });
    }

    var swatchElementsOptions = document.getElementsByClassName('options');

    for (var i = 0; i < swatchElementsOptions.length; i++) {
        swatchElementsOptions[i].addEventListener('click', function () {
            var value = this.dataset.value;

            var slVariantElement = document.getElementsByClassName('slVariant')[2];
            slVariantElement.innerHTML = value;
        });
    }
}

try {
    addOptions();
} catch (e) {
}


function cartTable() {
// Obține referința către elementul tbody din tabel
    var tbody = document.querySelector('table tbody');
    let cartItems = localStorage.length + 10;
    let note = JSON.parse(localStorage.getItem("note"));
    note ? document.getElementsByName("note")[0].value=note.value : '';

// Parcurge fiecare element din Local Storage
    for (var i = 1; i <= cartItems; i++) {
        let key = 'product' + i;
        let productData = JSON.parse(localStorage.getItem(key));

        if (productData === null) {
            continue; // Treci la următoarea iterație a buclei
        }

        // Creează un nou rând pentru produs
        var productRow = document.createElement('tr');
        productRow.classList.add('cart__row', 'border-bottom', 'line1', 'cart-flex', 'border-top');
        productRow.id = key;
        productRow.innerHTML = `
      <td class="cart__image-wrapper cart-flex-item">
          <a href="#"><img class="cart__image" src="${productData.image}" alt="${productData.name}"></a>
      </td>
      <td class="cart__meta small--text-left cart-flex-item">
          <div class="list-view-item__title">
              <a href="#">${productData.name}</a>
          </div>
          <div class="cart__meta-text">
              Parfum: ${productData.aroma}<br>Culoare: ${productData.color}<br>Aplicatii: ${productData.options}<br>
          </div>
      </td>
      <td class="cart__price-wrapper cart-flex-item">
          <span class="money">${productData.price} Mdl</span>
      </td>
      <td class="cart__update-wrapper cart-flex-item text-right">
          <div class="cart__qty text-center">
              <div class="qtyField">
                  <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a>
                  <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="${productData.quantity}" pattern="[0-9]*">
                  <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon icon-plus"></i></a>
              </div>
          </div>
      </td>
      <td class="text-right small--hide cart-price">
          <div><span class="money">${(productData.price * productData.quantity).toFixed(2)} Mdl</span></div>
      </td>
      <td class="text-center small--hide"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
    `;
        tbody.appendChild(productRow);
    }

    function removeItem(){
        $(".cart__remove").on("click", function () {
            var key = $(this).parent().parent().attr('id');
            if (localStorage.getItem(key)) {
                $(this).parent().parent().remove();
                document.getElementById(key).remove();
                localStorage.removeItem(key);
                updateCartSubtotal();
            }
        });
    }
    removeItem();
    function qnt_incre() {
        $(".qtyBtn").on("click", function () {
            var qtyField = $(this).parent(".qtyField"),
                oldValue = $(qtyField).find(".qty").val(),
                newVal = 1;

            var price = $(this).parent().parent().parent().prev().text();
            price = parseInt(price)
            var totalPrice = $(this).parent().parent().parent().next();
            var key = $(this).parent().parent().parent().parent().attr('id');


            if ($(this).is(".plus")) {
                newVal = parseInt(oldValue) + 1;
            } else if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            }

            totalPrice.text(price * newVal + ".00 Mdl")
            updates(key, 'quantity', newVal)
            $(qtyField).find(".qty").val(newVal);

        });
    }

    qnt_incre();

    // function updates(key, quantity) {
    //     var productData = JSON.parse(localStorage.getItem(key));
    //     productData.quantity = quantity; // Modifică valoarea la 5 sau orice altă valoare dorită
    //     localStorage.setItem(key, JSON.stringify(productData));
    //     displayCartProducts();
    // }

    function updates(key, field, value) {
        var productData = JSON.parse(localStorage.getItem(key));
        if(productData == null){
            localStorage.setItem(key, JSON.stringify({value}));
        }else {
            productData[field] = value;
            localStorage.setItem(key, JSON.stringify(productData));
        }
        displayCartProducts();
    }

    function verifyForm() {
        var cartTearm = document.getElementById("cartTearm");
        var note = document.getElementsByName("note")[0];

        updates("note", "value", note.value)

        if (cartTearm.checked ) {
            window.location.href = checkoutUrl;

        } else {
            document.getElementById('cartTearm').parentElement.style="color:red"
        }
    }

    var cartCheckoutBtn = document.getElementById("cartCheckout");
    cartCheckoutBtn.addEventListener("click", verifyForm);

}

function checkoutTable(){
    // Obține referința către elementul tbody din tabel
    var tbody = document.querySelector('table tbody');
    let cartItems = localStorage.length + 10;

    let note = JSON.parse(localStorage.getItem("note"));
    note ? document.getElementsByName("note")[0].value=note.value : '';

// Parcurge fiecare element din Local Storage
    for (var i = 1; i <= cartItems; i++) {
        let key = 'product' + i;
        let productData = JSON.parse(localStorage.getItem(key));

        if (productData === null) {
            continue; // Treci la următoarea iterație a buclei
        }

        // Creează un nou rând pentru produs
        var productRow = document.createElement('tr');
        productRow.id = key;
        productRow.innerHTML = `
         <td class="text-left">${productData.name}</td>
         <td>${(productData.price * 1)}</td>
         <td>${productData.aroma} / ${productData.color} / ${productData.options}</td>
         <td>${(productData.quantity)}</td>
         <td>${(productData.price * productData.quantity)}</td>
    `;
        tbody.appendChild(productRow);
    }

    document.getElementById('checkoutForm').addEventListener('submit', function() {
        document.getElementById('localStorageData').value = JSON.stringify(localStorage);
    });
}

if(window.location.pathname === "/cos-de-cumparaturi"){
    cartTable();
}else if(window.location.pathname === "/finalizare-comanda"){
    checkoutTable();
}else {
    function qnt_incre() {
        $(".qtyBtn").on("click", function () {
            var qtyField = $(this).parent(".qtyField"),
                oldValue = $(qtyField).find(".qty").val(),
                newVal = 1;

            if ($(this).is(".plus")) {
                newVal = parseInt(oldValue) + 1;
            } else if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            }
            $(qtyField).find(".qty").val(newVal);
            $("#items").val(newVal);

        });
    }

    qnt_incre();
}
