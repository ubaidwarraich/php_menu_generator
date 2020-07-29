const add_btn = document.querySelector("#add-btn");
const input_value = document.getElementById("value");
const input_link = document.getElementById("link");
let menu_items = new Array();
const ul_items = document.querySelector(".ul-items");

add_btn.addEventListener("click", () => {
    let itemObj = {
        text: `${input_value.value.trim()}`,
        link: `${input_link.value.trim()}`,
        sub_items: "",
        level:3
    };
    menu_items.push(itemObj);
    let mark_up_item = `
    <div>
        <li class="list-group-item d-flex justify-content-between align-items-center ">
            <div class="text-container">
                <h6>${input_value.value.trim()}</h6>
            </div>
            <div>
                <button type="button" data-name="${input_value.value.trim()}" class="btn btn-primary add-sub-btn"><i
                            class="icofont-ui-add"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit edit-btn"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                        data-toggle="collapse" data-target="#${input_value.value.trim()}-sub" aria-expanded="false"
                        aria-controls="${input_value.value.trim()}-sub"></i></button>
            </div>
        </li>
    </div>
    <div class="collapse" id="${input_value.value.trim()}-sub">
        <div class="form-group col-md-12">
            <ul class="group-list">
            </ul>
        </div>
    </div> 
    `;
    ul_items.innerHTML += mark_up_item;
    get_add_sub_items();
});

function get_add_sub_items() {
    let sub_add_btns = document.querySelectorAll(".add-sub-btn");
    sub_add_btns.forEach((btn) => {
        btn.addEventListener("click", () => {
            let item_name = btn.getAttribute("data-name");
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
                    }
                    else{
                        item.sub_items.push(itemObj);
                    }
                    console.log(JSON.stringify(menu_items));
                    let ul_menu_item=document.querySelector(`#${item.text}-sub div ul`);
                    ul_menu_item.innerHTML+=`
                    <div>
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="text-container">
                                <h6>${itemObj.text}</h6>
                            </div>
                            <div>
                            <button type="button" class="btn btn-primary add-sub-sub-btn"  data-name="${input_value.value.trim()}"><i
                                            class="icofont-ui-add"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-sub-listing"
                                        data-toggle="collapse" data-target="#${itemObj.text}-sub-sub" aria-expanded="false"
                                        aria-controls="${itemObj.text}-sub-sub"></i></button>
                            </div>
                        </li>
                    </div>
                    <div class="collapse" id="${input_value.value.trim()}-sub-sub">
                    <div class="form-group col-md-12">
                        <ul class="group-list">
                        </ul>
                    </div>
                    </div> 
                    `;
                    get_3rd_level_items();
                }
            });
        });
    });
}

function get_3rd_level_items(){
    let sub_add_btns = document.querySelectorAll(".add-sub-sub-btn");
    sub_add_btns.forEach((btn) => {
        btn.addEventListener("click", () => {
            let item_name = btn.getAttribute("data-name");
            menu_items.forEach((item) => {
                // checking if the item exists in array for which we want to add sub item
                item.sub_items.forEach(item=>{
                    if(item.text==item_name){
                    let itemObj = {
                        text: `${input_value.value.trim()}`,
                        link: `${input_link.value.trim()}`,
                        sub_items: ""
                    };
                    if (item.sub_items.length == 0) {
                        item.sub_items = new Array();
                        item.sub_items.push(itemObj);
                    }
                    else{
                        item.sub_items.push(itemObj);
                    }
                    console.log(JSON.stringify(menu_items));
                    let ul_menu_item=document.querySelector(`#${item.text}-sub-sub div ul`);
                    ul_menu_item.innerHTML+=`
                    <div>
                        <li class="list-group-item d-flex justify-content-between align-items-center ">
                            <div class="text-container">
                                <h6>${itemObj.text}</h6>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-edit"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icofont-ui-delete"></i></button>
                            </div>
                        </li>
                    </div>
                    `;
                    }
                })
            });
        });
    });
}