let baseUrl= 'https://swapi.dev/api/films/2/'
let movie = document.getElementById('app')


fetch(baseUrl).then(response => response.json())
.then(json =>{
console.log(json)
movie.innerHTML=`<h1>${json.title}</h1>
<p><strong>Directed by:</strong> ${json.director}</p>
<p><strong>Produced by:</strong> ${json.producer}</p>
<p><strong>Release Date:</strong> ${json.release_date}</p>`

})