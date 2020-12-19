//import {find, filter} from 'lodash'

function addProduct(state, product){
    //const productInCart = find(state.cart, { id: product.id});
    const prod = state.cart.find(pro => pro.id === product.id);
    //console.log(product)
    if( prod === undefined ){
        const copy = Object.assign({},product);
        copy.qty = 1,
        
        
        //console.log(copy)
        state.cart.push(copy)
    } else {
        //productInCart.qty += 1
        prod.qty += 1

    }
}
function removeProductFromCart(state, product){
    //console.log(state.cart);
    const fill = state.cart.filter(cart => cart.id !== product.id);
    //console.log(fill)
    state.cart = fill
}

export {
    addProduct,
    removeProductFromCart
}