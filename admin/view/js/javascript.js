/********** FILM *********/
function hide_form_add_rap() {
    document.getElementById('form_add_rap').style.display = "none";
}

function show_form_add_rap() {
    document.getElementById('form_add_rap').style.display = "block";
}

function hide_form_edit_rap() {
    document.getElementById('form_edit_rap').style.display = "none";
}

function show_form_edit_rap() {
    document.getElementById('form_edit_rap').style.display = "block";
}

function submit_form_alert() {
    alert('Bạn vừa submit form');
}

function enter_to_submit(id_enter, id_submit) {
    var element = document.getElementById(this.id_enter);
    element.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById(this.id_submit).click();
        }
    });
}

function check(id) {
    document.getElementById(id).checked = true;
}

function uncheck(id) {
    document.getElementById(id).checked = false;
}

function reset_input_addrap() {
    document.getElementById("input_tenrap_addrap").value = "";
    document.getElementById("input_diachi_addrap").value = "";
}