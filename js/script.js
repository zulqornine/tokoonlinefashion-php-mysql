// Toggle class active

const navbarNav = document.querySelector('.navbar-nav');
// Ketika humberger menu di klik
document.querySelector('#humburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};


// Klik di luar sidebar untuk menghilangkan nav
const humburger = document.querySelector('#humburger-menu');

document.addEventListener('click', function(e){
    if(!humburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active')
    }
})

// Produk
const product = [
    {
        id: 0,
        image: 'img/produk.jpg',
        title: 'Formal Suit',
        price: 120000,
    },
    {
        id: 1,
        image: 'img/produk.jpg',
        title: 'Plain T-shirt',
        price: 60000,
    },
    {
        id: 2,
        image: 'img/produk.jpg',
        title: 'Kacamata',
        price: 230000,
    },
    {
        id: 3,
        image: 'img/produk.jpg',
        title: 'Jaket Pria',
        price: 100000,
    },
    {
        id: 4,
        image: 'img/produk.jpg',
        title: 'Jam Tangan',
        price: 100000,
    },
    {
        id: 5,
        image: 'img/produk.jpg',
        title: 'Jam Tangan',
        price: 100000,
    }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Rp ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Rp "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "Rp "+total;
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>Rp ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

}