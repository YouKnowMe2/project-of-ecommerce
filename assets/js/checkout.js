
function checkCart(){
    var cookieValue = document.cookie
    .split('; ')
    .find(row => row.startsWith('listCart='));
    if(cookieValue){
        listCart = JSON.parse(cookieValue.split('=')[1]);
        listCart = listCart.filter(item => item !== null); // Filter out null values
        console.log(listCart);
    }
}
checkCart();

function addCartToHTML(){
   
    let listCartHTML = document.querySelector('.returnCart .list');
    listCartHTML.innerHTML = '';

    let totalQuantityHTML = document.querySelector('.totalQuantity');
    let totalPriceHTML = document.querySelector('.totalPrice');
    let totalQuantity = 0;
    let totalPrice = 0;
   
    if(listCart && products){
        console.log(listCart);
        listCart.forEach(cartItem => {
            if (cartItem) {
               
                let product = products.find(p => String(p.id) === String(cartItem.id));
            if(product){
                let newCart = document.createElement('div');
                newCart.classList.add('item');
                newCart.innerHTML = 
                    `<img src="../uploads/${product.image}">
                    <div class="info">
                        <div class="name">${product.name}</div>
                        <div class="price">$${product.price}/1 product</div>
                    </div>
                    <div class="quantity">${cartItem.quantity}</div>
                    <div class="returnPrice">$${product.price * cartItem.quantity}</div>`;
                listCartHTML.appendChild(newCart);
                totalQuantity = totalQuantity + cartItem.quantity;
                totalPrice = totalPrice + (product.price * cartItem.quantity);
            }
        }
        })
    }
    totalQuantityHTML.innerText = totalQuantity;
    totalPriceHTML.innerText = '$' + totalPrice;
}

addCartToHTML();