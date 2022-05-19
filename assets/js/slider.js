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