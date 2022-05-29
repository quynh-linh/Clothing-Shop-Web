//js size
let btnSize = document.getElementsByClassName('btn_size');
for (let i = 0; i < btnSize.length; i++) {

    btnSize[i].addEventListener('click', () => {
        for (let i = 0; i < btnSize.length; i++) {
            btnSize[i].style.background = "none"
            btnSize[i].style.color = "black"
        }
        btnSize[i].style.background = "blue"
        btnSize[i].style.color = "white"
        document.getElementById("checkSize").innerHTML = ""
        document.getElementById("btn_sizes").value = btnSize[i].value

    })
}

// canh bao chua chon size
function checkSize() {
    if (document.getElementById("btn_sizes").value == "") {
        document.getElementById("checkSize").innerHTML = "Bạn chưa chọn size"
    }
}
checkSize()

//js số lượng

function down() {
    let Quantity = document.getElementById('input_quantity').value
    if (Quantity > 1)
        Quantity--
        document.getElementById('input_quantity').value = Quantity

}


function rederdata() {
    let tabs = document.getElementsByClassName('exclusive-tab');
    for (i = 0; i < tabs.length; i++) {
        tabs[i].style.color = '#c9c9c9';
    }
    tabs[0].style.color = '#0b1b20';
}
rederdata()
document.getElementById('men').style.display = 'block';
function changeBestSeller(type, element) {
    let tabs = document.getElementsByClassName('exclusive-tab');
    for (i = 0; i < tabs.length; i++) {
        tabs[i].style.color = '#c9c9c9';
    }
    element.style.color = '#0b1b20';
    document.getElementById(type).style.display = 'block';
    switch (type) {
        case 'women':
            document.getElementById('men').style.display = 'none';
            document.getElementById('kids').style.display = 'none';
            break;
        case 'men':
            document.getElementById('women').style.display = 'none';
            document.getElementById('kids').style.display = 'none';
            break;
        case 'kids':
            document.getElementById('men').style.display = 'none';
            document.getElementById('women').style.display = 'none';
            break;
        default:
            break;
    }
}

function swal_login_false(){
    Swal.fire({
              icon: 'warning',
              title: 'Oops...',
              text: 'Bạn phải đăng nhập mới được mua hàng.',
            })
}
