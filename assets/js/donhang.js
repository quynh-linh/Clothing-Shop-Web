//js nút QL đổi màu
let btnQL = document.getElementsByClassName('QLdonhang');
let table = document.getElementById('choXN');
btnQL[0].style.background = "#2a2b2c";
btnQL[0].style.color = "white";

let table_0 = document.getElementsByClassName('table_0');
let table_1 = document.getElementsByClassName('table_1');
let table_2 = document.getElementsByClassName('table_2');
let table_3 = document.getElementsByClassName('table_3');
let table_4 = document.getElementsByClassName('table_4');

let display_0 = document.getElementsByClassName('display_0');
let display_1 = document.getElementsByClassName('display_1');
let display_2 = document.getElementsByClassName('display_2');
let display_3 = document.getElementsByClassName('display_3');
let display_4 = document.getElementsByClassName('display_4');



for (let i = 0; i < table_0.length; i++)
    table_0[i].style.display = 'block';

for (let i = 0; i < table_1.length; i++)
    table_1[i].style.display = 'none';

for (let i = 0; i < table_2.length; i++)
    table_2[i].style.display = 'none';

for (let i = 0; i < table_3.length; i++)
    table_3[i].style.display = 'none';

for (let i = 0; i < table_4.length; i++)
    table_4[i].style.display = 'none';


btnQL[0].addEventListener('click', () => {
    for (let i = 0; i < table_0.length; i++) {
        table_0[i].style.display = 'block';
        display_0[i].style.display = 'none';
    }
    for (let i = 0; i < table_1.length; i++) {
        table_1[i].style.display = 'none';
        display_1[i].style.display = 'none';
    }

    for (let i = 0; i < table_2.length; i++) {
        table_2[i].style.display = 'none';
        display_2[i].style.display = 'none';
    }

    for (let i = 0; i < table_3.length; i++) {
        table_3[i].style.display = 'none';
        display_3[i].style.display = 'none';
    }

    for (let i = 0; i < table_4.length; i++) {
        table_4[i].style.display = 'none';
        display_4[i].style.display = 'none';
    }
})

btnQL[1].addEventListener('click', () => {
    for (let i = 0; i < table_1.length; i++) {
        table_1[i].style.display = 'block';
        display_1[i].style.display = 'none';
    }


    for (let i = 0; i < table_0.length; i++) {
        table_0[i].style.display = 'none';
        display_0[i].style.display = 'none';
    }

    for (let i = 0; i < table_2.length; i++) {
        table_2[i].style.display = 'none';
        display_2[i].style.display = 'none';
    }

    for (let i = 0; i < table_3.length; i++) {
        table_3[i].style.display = 'none';
        display_3[i].style.display = 'none';
    }

    for (let i = 0; i < table_4.length; i++) {
        table_4[i].style.display = 'none';
        display_4[i].style.display = 'none';
    }
})

btnQL[3].addEventListener('click', () => {
    for (let i = 0; i < table_3.length; i++) {
        table_3[i].style.display = 'block';
        display_3[i].style.display = 'none';
    }


    for (let i = 0; i < table_1.length; i++) {
        table_1[i].style.display = 'none';
        display_1[i].style.display = 'none';
    }

    for (let i = 0; i < table_0.length; i++) {
        table_0[i].style.display = 'none';
        display_0[i].style.display = 'none';
    }

    for (let i = 0; i < table_2.length; i++) {
        table_2[i].style.display = 'none';
        display_2[i].style.display = 'none';
    }

    for (let i = 0; i < table_4.length; i++) {
        table_4[i].style.display = 'none';
        display_4[i].style.display = 'none';
    }
})

btnQL[2].addEventListener('click', () => {
    for (let i = 0; i < table_2.length; i++) {
        table_2[i].style.display = 'block';
        display_2[i].style.display = 'none';
    }


    for (let i = 0; i < table_1.length; i++) {
        table_1[i].style.display = 'none';
        display_1[i].style.display = 'none';
    }

    for (let i = 0; i < table_0.length; i++) {
        table_0[i].style.display = 'none';
        display_0[i].style.display = 'none';
    }

    for (let i = 0; i < table_3.length; i++) {
        table_3[i].style.display = 'none';
        display_3[i].style.display = 'none';
    }

    for (let i = 0; i < table_4.length; i++) {
        table_4[i].style.display = 'none';
        display_4[i].style.display = 'none';
    }
})

function changeProductList(type, element) {
    let tabs = document.getElementsByClassName('QLdonhang');
    for (i = 0; i < tabs.length; i++) {
        tabs[i].style.background = 'white';
        tabs[i].style.color = 'black';
    }
    element.style.background = '#2a2b2c';
    element.style.color = 'white';

    document.getElementById(type).style.display = 'block';

}

btnQL[4].addEventListener('click', () => {
    for (let i = 0; i < table_4.length; i++) {
        table_4[i].style.display = 'block';
        display_4[i].style.display = 'none';
    }


    for (let i = 0; i < table_1.length; i++) {
        table_1[i].style.display = 'none';
        display_1[i].style.display = 'none';
    }

    for (let i = 0; i < table_0.length; i++) {
        table_0[i].style.display = 'none';
        display_0[i].style.display = 'none';
    }

    for (let i = 0; i < table_3.length; i++) {
        table_3[i].style.display = 'none';
        display_3[i].style.display = 'none';
    }

    for (let i = 0; i < table_2.length; i++) {
        table_2[i].style.display = 'none';
        display_2[i].style.display = 'none';
    }
})

//hiển thi chi tiết tung đơn hàng
let toggle = document.getElementsByClassName('toggle');
let display_body = document.getElementsByClassName('display');
for (let i = 0; i < toggle.length; i++) {

    toggle[i].addEventListener('click', () => {
        if (display_body[i].style.display == "none") {
            display_body[i].style.display = "block"
        } else {
            display_body[i].style.display = "none"
        }

    })
}