const empty = document.querySelector('.containerChoose')

window.addEventListener('load', function() {
if (empty.innerHTML.trim().length == 0) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'no_content', true)
    xhr.onload = function(){
    empty.innerHTML = this.responseText; 
    }
    xhr.send();
}
})