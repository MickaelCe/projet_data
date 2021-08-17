let search = document.querySelector("#search");


search.addEventListener("keyup", function(){
    ajaxSearch();
})

function ajaxSearch() {
    let searchValue = document.querySelector("#search").value;
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "public/controller/controller_search.php?search=" + searchValue);
    xhr.onload = function() {
        if(xhr.status === 200){
            document.querySelector("searchPossibility").innerHTML = xhr.responseText;
            console.log(xhr.status);
        } else {
            console.log(xhr.status);
        }
    }
    xhr.send();
}