//MAPPING ARTISTI

//seleziona il div contenitore in cui renderizzare le card degli artisti
const $artistContainer = document.querySelector("#artistContainer");

//richiama la funzione che ritorna i valori presi dal codice PHP.
fetch('/SITOWEB/artisti.php')
  .then(response => response.json()) // il metodo .json() trasforma l'array associativo codificato in stringa json da PHP in un oggetto JSON per javascrtipt. 
  //JSON = JavaScript Object Notation 
  .then(data => {
    // Process the data received from the PHP script
    console.log(data); // Or perform any other operations with the data
	  $artistContainer.innerHTML = data.map(artista => {
	  	return `<div class=artist__card style="background: url(${artista.immagine}) no-repeat scroll center/cover">
	  	        	<h2>${artista.nome}</h2>
	  	        </div>`
	  }).join("") //metodo degli array che unisce tutti gli elementi di un array in un'unica stringa. In questo caso togliamo gli spazi tra le card.
  })