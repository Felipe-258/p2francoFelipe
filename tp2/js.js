function getCharacter(){

    let character=document.getElementById("nro");
    console.log(character.value)
    fetch('https://rickandmortyapi.com/api/character/')
    .then(function(response){
        return response.json()
        
        }
    )
    .then(function(data){

            if (character.value>data.info.count) {
            alert("error solo existen "+data.info.count+" personajes")
            }
    }
    )
    console.log(character.value)
    const results = fetch('https://rickandmortyapi.com/api/character/'+character.value)
    .then(function(response){
        return response.json()
    })
    .then(function(data){  
        let resultado=document.getElementById("resultado")
        resultado.innerHTML=` 
        <br> Nombre: ${data.name} 
        <br> Estado: ${data.status} 
        </br> Especie: ${data.species}
        </br>Locaciòn: ${data.location.name}
        </br>
        <img src=${data.image}>
        `
    })
}