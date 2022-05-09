//js nút QL đổi màu
let btnQL = document.getElementsByClassName('QLdonhang');
let table = document.getElementsByClassName('table')
//mặc định mục chờ xác nhận là mục hiển thị đầu tiên
table[0].style.display="block"
btnQL[0].style.background="#2a2b2c"
btnQL[0].style.color="white" 
            for(let i=1;i<btnQL.length;i++){
                btnQL[i].style.background="none"
                btnQL[i].style.color="black"
                table[i].style.display="none"
            }

//click mục nào đổi màu mục đó và hiển thị table tuong ứng
for(let i=0;i<btnQL.length;i++){

    btnQL[i].addEventListener('click',() =>{   
        for(let i=0;i<btnQL.length;i++){
            btnQL[i].style.background="none"
            btnQL[i].style.color="black"
            table[i].style.display="none"
        }
        table[i].style.display="block"
        btnQL[i].style.background="#2a2b2c"
        btnQL[i].style.color="white"    
    })
}



