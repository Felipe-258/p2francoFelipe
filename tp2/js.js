function getCharacter(){
    let character=document.getElementById("nro");
    const results = fetch('https://rickandmortyapi.com/api/character/'+character.value)
    .then(function(response){
        return response.json()
    })
    .then(function(data){
        //console.log(data);
        function mostrarImagen() {
            var urlImagen = data.image;
            var imagen = new Image();
            imagen.src = urlImagen;
            document.body.appendChild(imagen);
          }  
        document.write("Nombre: "+data.name); //nombre
        document.write("</br>Estado: "+data.status); //estado
        document.write("</br>Especie: "+data.species); //especie
        document.write("</br>Lugar Actual: "+data.location.name+"</br>"); //ultimo lugar
        //document.write("</br>Lugar de Origen: "+data.origin.name+"</br>");
        mostrarImagen();
    })
    
}
