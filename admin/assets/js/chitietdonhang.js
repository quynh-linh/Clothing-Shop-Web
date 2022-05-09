//hiển thi chi tiết tung đơn hàng
let toggle=document.getElementsByClassName('toggle');
let display_body=document.getElementsByClassName('display');

for(let i=0;i<toggle.length;i++){

    toggle[i].addEventListener('click',() =>{
        if(display_body[i].style.display=="none"){
            display_body[i].style.display="block"
        }
        else{
            display_body[i].style.display="none"
        }
            
    })
}