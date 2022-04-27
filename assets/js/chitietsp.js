//js size
let btnSize = document.getElementsByClassName('btn_size');
for(let i=0;i<btnSize.length;i++){

    btnSize[i].addEventListener('click',() =>{   
        for(let i=0;i<btnSize.length;i++){
            btnSize[i].style.background="none"
            btnSize[i].style.color="black"
        }
        btnSize[i].style.background="blue"
        btnSize[i].style.color="white"
        document.getElementById("checkSize").innerHTML = ""
    document.getElementById("btn_sizes").value = btnSize[i].value
    
    })
}

// canh bao chua chon size
function checkSize(){
    if (document.getElementById("btn_sizes").value =="")
        {
            document.getElementById("checkSize").innerHTML ="Bạn chưa chọn size"
        }
}
checkSize() 
//js số lượng

function down(){
    let Quantity = document.getElementById('input_quantity').value
    if(Quantity>1)
    Quantity--
    document.getElementById('input_quantity').value=Quantity

}
function up(){
    let Quantity = document.getElementById('input_quantity').value
    Quantity++
    document.getElementById('input_quantity').value=Quantity

}





