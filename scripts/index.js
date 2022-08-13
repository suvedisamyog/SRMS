


function toogle(){
let toggle_bar = document.querySelector(".toogler");

let sidebar = document.querySelector(".one");

toggle_bar.addEventListener("click", function(){
  
   sidebar.classList.toggle("showsidebar")
})
}