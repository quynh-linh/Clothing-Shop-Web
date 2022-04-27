
function down(i){
    let btn_down = document.getElementById('id'+i).value;
    if(btn_down>1)
    btn_down--
    document.getElementById('id'+i).value=btn_down
}
function up(i){
    let btn_up = document.getElementById('id'+i).value;
    btn_up++
    document.getElementById('id'+i).value=btn_up
}
