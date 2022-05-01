//js nút QL đổi màu
let btnQL = document.getElementsByClassName('QLdonhang');
let table = document.getElementById('choXN');
btnQL[0].style.background = "black";
btnQL[0].style.color = "white";
document.getElementById('daGiao').style.display = 'none';
document.getElementById('daHuy').style.display = 'none';

function changeProductList(type, element) {
    let tabs = document.getElementsByClassName('QLdonhang');
    for (i = 0; i < tabs.length; i++) {
        tabs[i].style.background = 'white';
        tabs[i].style.color = 'black';
    }
    element.style.background = 'black';
    element.style.color = 'white';
    document.getElementById(type).style.display = 'block';
    switch (type) {
        case 'daHuy':
            document.getElementById('choXN').style.display = 'none';
            document.getElementById('daGiao').style.display = 'none';
            break;
        case 'choXN':
            document.getElementById('daGiao').style.display = 'none';
            document.getElementById('daHuy').style.display = 'none';
            break;
        case 'daGiao':
            document.getElementById('daHuy').style.display = 'none';
            document.getElementById('choXN').style.display = 'none';
            break;
        default:
            break;
    }
}