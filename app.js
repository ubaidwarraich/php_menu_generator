let menu_items = new Array();
window.onload = function () {
    let menu_items = document.cookie.split(`;`);
    let json_array = menu_items[0].split("=")[1];
    menu_items = JSON.parse(json_array);
    add_cookie_markup(menu_items);
}

const add_btn = document.querySelector("#add-btn");
const input_value = document.getElementById("value");
const input_link = document.getElementById("link");
const ul_items = document.querySelector(".ul-items");
const save_btn = document.getElementById('save-btn');
const user_id=document.getElementById('user-id').value;

save_btn.addEventListener('click', (e) => {
    e.preventDefault();
    let menu_items = document.cookie.split(`;`);
    let json_array = menu_items[0].split("=")[1];
    menu_items = JSON.parse(json_array);
    // console.log(JSON.stringify(menu_items));
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './classes/upload_menu.php?menu=' + JSON.stringify(menu_items)+"&user-id="+user_id, true);
    xhr.onload = function () {
        if (this.status == 200) {
            if(this.responseText==true){
                window.alert('Menu Saved Successfully');
                location.reload();
            }
        }
    }
    xhr.send();
})


function add_cookie_markup(menu_array) {
    menu_array.forEach(item => {
        let mark_up_item = get_mark_up_menu_item_1st(item.text);
        ul_items.innerHTML += mark_up_item;
        if (item.sub_items.length != 0) {
            set_second_level_cookie(item.text, item.sub_items);
        }
    })
}

function set_second_level_cookie(parent, menu_arr) {
    menu_arr.forEach(item => {
        let ul_menu_item = document.querySelector(`#${parent}-sub div ul`);
        ul_menu_item.innerHTML += get_mark_up_menu_item_2nd(item.text);
        if (item.sub_items, length != 0) {
            set_third_level_cookie(item.text, item.sub_items);
        }
    })
}

function set_third_level_cookie(parent, menu_arr) {
    menu_arr.foreach(item => {
        let ul_menu_item = document.querySelector(`#${parent}-sub-sub div ul`);
        ul_menu_item.innerHTML += get_mark_up_menu_item_3rd(item.text);
    })
}

function addcookie(value) {
    document.cookie = "menu=" + value + ";";
}

function getcookie() {
    return document.cookie;
}

add_btn.addEventListener("click", set_first_level_menu);


function set_first_level_menu() {
    let itemObj = {
        text: `${input_value.value.trim()}`,
        link: `${input_link.value.trim()}`,
        sub_items: ""
    };
    menu_items.push(itemObj);
    addcookie(JSON.stringify(menu_items));
    let mark_up_item = get_mark_up_menu_item_1st(input_value.value.trim());
    ul_items.innerHTML += mark_up_item;
    get_add_sub_items();

}




function get_mark_up_menu_item_1st(value) {
    return `
    <div>
        <li class="list-group-item d-flex justify-content-between align-items-center ">
            <div class="text-container">
                <h6>${value}</h6>
            </div>
            <div>
                <button type="button" data-name="${value}" class="btn btn-primary add-sub-btn"><i class="icofont-ui-add"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit edit-btn"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing" data-toggle="collapse" data-target="#${value}-sub" aria-expanded="false" aria-controls="${value}-sub"></i></button>
            </div>
        </li>
    </div>
    <div class="collapse" id="${value}-sub">
        <div class="form-group col-md-12">
            <ul class="group-list">
            </ul>
        </div>
    </div> 
    `;
}




function get_add_sub_items() {
    let sub_add_btns = document.querySelectorAll(".add-sub-btn");
    sub_add_btns.forEach((btn) => {
        btn.addEventListener("click", set_second_level_menu);
    });
}

function set_second_level_menu() {
    let item_name = this.getAttribute("data-name");
    menu_items.forEach((item) => {
        // checking if the item exists in array for which we want to add sub item
        if (item.text == item_name) {
            let itemObj = {
                text: `${input_value.value.trim()}`,
                link: `${input_link.value.trim()}`,
                sub_items: ""
            };
            if (item.sub_items.length == 0) {
                item.sub_items = new Array();
                item.sub_items.push(itemObj);
            } else {
                item.sub_items.push(itemObj);
            }
            addcookie(JSON.stringify(menu_items));
            let ul_menu_item = document.querySelector(`#${item.text}-sub div ul`);
            ul_menu_item.innerHTML += get_mark_up_menu_item_2nd(input_value.value.trim());
            get_3rd_level_items();
        }
    });
}


function get_mark_up_menu_item_2nd(value) {
    return `
    <div>
        <li class="list-group-item d-flex justify-content-between align-items-center ">
            <div class="text-container">
                <h6>${value}</h6>
            </div>
            <div>
                <button type="button" class="btn btn-primary add-sub-sub-btn"  data-name="${value}"><i class="icofont-ui-add"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing" data-toggle="collapse" data-target="#${value}-sub-sub" aria-expanded="false" aria-controls="${value}-sub-sub"></i></button>
            </div>
        </li>
    </div>
    <div class="collapse" id="${value}-sub-sub">
        <div class="form-group col-md-12">
            <ul class="group-list">
            </ul>
        </div>
    </div> 
    `;
}

function get_3rd_level_items() {
    let sub_add_btns = document.querySelectorAll(".add-sub-sub-btn");
    sub_add_btns.forEach((btn) => {
        btn.addEventListener("click", set_third_level_menu);
    });
}

function set_third_level_menu() {
    let item_name = this.getAttribute("data-name");
    menu_items.forEach((item) => {
        // checking if the item exists in array for which we want to add sub item
        item.sub_items.forEach(item => {
            if (item.text == item_name) {
                let itemObj = {
                    text: `${input_value.value.trim()}`,
                    link: `${input_link.value.trim()}`,
                    sub_items: ""
                };
                if (item.sub_items.length == 0) {
                    item.sub_items = new Array();
                    item.sub_items.push(itemObj);
                } else {
                    item.sub_items.push(itemObj);
                }
                addcookie(JSON.stringify(menu_items));
                let ul_menu_item = document.querySelector(`#${item.text}-sub-sub div ul`);
                ul_menu_item.innerHTML += get_mark_up_menu_item_3rd(input_value.value);
            }
        })
    });
}

function get_mark_up_menu_item_3rd(value) {
    return `
            <div>
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <div class="text-container">
                        <h6>${value}</h6>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                        <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                    </div>
                </li>
            </div>
            `;
}

const logout_btn=document.querySelector('.logout');
logout_btn.addEventListener('click',logout);
function logout(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST', './logout.php?logout='+true,true);
    xhr.onload = function () {
        if (this.status == 200) {
            if(this.responseText==true){
                location.reload();
            }
        }
    }
    xhr.send();
}
