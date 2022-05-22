// thanh trượt giá
    var slider = document.getElementById("slider_pr");
    var output = document.getElementById("max");
    var pathname = window.location.pathname;
    let link=window.location.href;
    output.innerHTML = slider.value;
    slider.oninput = function() {
        output.innerHTML = this.value;
        save_data();			
    };
    function save_data() {
        var input = document.getElementById("slider_pr");
        localStorage.setItem("server", input.value);
    }
    function load_data() {
    var input = document.getElementById("slider_pr");
    if(localStorage.getItem("server") == null){
        input.value = 0;
    } else {
        input.value = localStorage.getItem("server");
    }
    document.getElementById("max").innerHTML = slider.value;
    //window.location.href="./timkiemnangcao.php";
    if(window.location.href==link){
        localStorage.setItem("server", input.value);			
    }else{
        localStorage.setItem("server", 0);			
    }		
}
load_data();

// click chon trang
var number_page = document.getElementsByClassName("foward-btn");
var btn_next = document.getElementsByClassName("ti-angle-right");
var btn_pre = document.getElementsByClassName("ti-angle-left");

for (let i = 0; i < number_page.length; i++){
    number_page[i].style.background=""
}
    number_page[0].style.background="#adb7b9"

for (let i = 0; i < number_page.length; i++) {

    number_page[i].addEventListener('click', () => {
        for (let i = 0; i < number_page.length; i++){
            number_page[i].style.background=""
        }
        number_page[i].style.background="#adb7b9"
    })
}

btn_next[1].addEventListener('click', () => {

        for (let i = 0; i < number_page.length; i++){
            if(number_page[i].style.background!=""){
                if(i+1 == number_page.length) break
                number_page[i+1].style.background="#adb7b9"
                number_page[i].style.background=""
                break
            }
            number_page[i].style.background=""
        }
})

btn_pre[1].addEventListener('click', () => {

        for (let i = 0; i < number_page.length; i++){
            if(number_page[i].style.background!=""){
                if(i-1 < 0) break
                number_page[i-1].style.background="#adb7b9"
                number_page[i].style.background=""
                break
            }
            number_page[i].style.background=""
        }
})