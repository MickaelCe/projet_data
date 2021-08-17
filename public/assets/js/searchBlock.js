const searchButton = document.getElementById('searchButton');


searchButton.addEventListener('click', function (e) {
    let searchForm = document.getElementById('search').value;
    if(searchForm == ''){
        e.preventDefault();
    } else {
        console.log("C'est good")
    }
    
})