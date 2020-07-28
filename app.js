const add_btn = document.getElementById("add-btn");
const input_val = document.getElementById("value");
const list = document.getElementById("list-menu-items");
add_btn.addEventListener("click", (e) => {
    e.preventDefault();
    let li = document.createElement("li");
    li.innerText = input_val.value;
    list.appendChild(li);
});