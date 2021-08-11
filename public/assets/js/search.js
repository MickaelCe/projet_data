
console.log("Search page loaded");
let search = document.querySelector("#search");


search.addEventListener("keyup", function(){
    ajaxSearch();
})

function ajaxSearch() {
    let searchValue = document.querySelector("#search").value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "public/vue/search.php" + searchValue);
    xhr.onload = function() {
        if(xhr.status === 200){
            document.querySelector("#content").innerHTML = xhr.responseText;
            console.log(xhr.status);
        } else {
            console.log(xhr.status);
        }
    }
    xhr.send();
}