const sec = document.querySelector('.searchProp')
const search = document.querySelector('#search')
const results = document.querySelector('.result')
const searchdiv = document.querySelector('.search')
const livesearch = document.querySelector('.livesearch-item')

search.addEventListener('keyup', (e) => {    
    let searchValue = document.querySelector('#search').value
        if (searchValue !== '') {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'searchList?name='+searchValue, true)
            xhr.onload = function(){
                sec.style.display = 'block'
                sec.innerHTML = this.responseText; 
            }
            xhr.send();
        } else if(searchValue === ''){
            document.querySelector('.searchProp').style.display = 'none'
            console.log('je suis vide')
        }
    console.log(searchValue)
})

livesearch