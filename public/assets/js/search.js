const sec = document.querySelector('#section')
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
                document.querySelector('.searchProp').style.display = 'block'
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