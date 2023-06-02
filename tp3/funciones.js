//var rick;
function getResults(){
        
        const results = fetch('https://rickandmortyapi.com/api/character/'+(Math.floor(Math.random() * 826)))
        .then(function(response){
            return response.json()
        })
        .then(function(data){  
            let resultado=document.getElementById("resultado")
            console.log(data)
            rick = data.gender;
            resultado.innerHTML=` 
            <br> Nombre: ${data.name} 
            <br> Estado: ${data.status} 
            </br> Especie: ${data.species}
            </br>Locación: ${data.location.name}
            </br>Genero: ${data.gender}
            </br>
            <img src=${data.image} height = 200>` 
            return  (rick = data.gender);
            }
        )
    
        //genero una randomuser con la api
        fetch('https://randomuser.me/api/')
        .then(function(response){
            return response.json()
            }
        )
        .then(function(data){
            console.log(data);        
            let resultado1=document.getElementById("resultado1"); //declaro la variable a llamar en el body
            //muestro los datos
            
            resultado1.innerHTML=`
            <br> Nombre: ${data.results[0].name.first}
            <br> Apellido: ${data.results[0].name.last}
            <br> Nacimiento: ${data.results[0].dob.date}
            <br> Genero: ${data.results[0].gender}
            <br> Localidad: ${data.results[0].location.city}
            <br> Coordenadas: ${data.results[0].location.coordinates.latitude} / ${data.results[0].location.coordinates.longitude}
            <br><img src=${data.results[0].picture.medium} height = 200>`
            return  (user = data.results[0].gender);
        }
        )
        .then(function(){
            console.log(rick);
            console.log(user);
            let ricki = rick.toLowerCase();
            console.log(ricki);
            if (ricki===user){
                console.log('match');
                let match=document.getElementById("match");
                match.innerHTML=`<img src='https://cdn.pixabay.com/photo/2016/03/31/14/37/check-mark-1292787_1280.png' height=200 >`
            } else {
                let match=document.getElementById("match");
                match.innerHTML=`<img src='https://img.freepik.com/vector-premium/icono-signo-incorrecto_188544-4739.jpg' height=200 >`
            }

        })
    }