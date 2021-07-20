'use strict';
//FETCH Y PETICIONES A SERVICIOS / APIS REST
var div_usuarios = document.querySelector("#usuarios");
var div_janet = document.querySelector("#janet");
var div_alejandro = document.querySelector("#alejandro");
getUsers() 
    .then(data  => data.json())
    .then(users =>{
        listadoUsiarios(users.data)
        return getMyInfo();

    })
    .then(data =>{
        div_alejandro.innerHTML = data;
        return getJanet();
    })
    .then (data  => data.json())
    .then(users =>{
        listadoJanet(users.data);
    });

function getUsers(){
    return fetch('https://reqres.in/api/users?page=1');
}

function getJanet(){
    return fetch('https://reqres.in/api/users/2?page=1');
}
function listadoUsiarios(usuarios){
    usuarios.map((user, i) =>{
        let nombre =  document.createElement('h2');
        let avatar =  document.createElement('img');
        avatar.src = user.avatar;
        avatar.width = '100';
        nombre.innerHTML = i + "-" + user.first_name + "-" + user.last_name;
        console.log(nombre);
        div_usuarios.append(nombre);
        div_usuarios.appendChild(nombre);
        div_usuarios.appendChild(avatar);
        document.querySelector(".loading").style.display = 'none';

    });
}

function listadoJanet(usuario){
        let nombre =  document.createElement('h2');
        let avatar =  document.createElement('img');
        avatar.src = usuario.avatar;
        avatar.width = '100';

        nombre.innerHTML = usuario.first_name + "-" + usuario.last_name;
        div_janet.appendChild(nombre);
        div_janet.appendChild(avatar);
        document.querySelector(".loading").style.display = 'none';
}
function getMyInfo(){
   
    var alejandro = {
        nombre: 'Alejandro',
        apellido: 'Moreno'
    };
    
    return new Promise((resolve, reject)=>{
        var myInfo = '';
        setTimeout(function(){
            myInfo = JSON.stringify(alejandro);
            if(typeof myInfo != 'string' || myInfo == '') return reject("error 1");
            
            return resolve(myInfo);

        }, 3000);
    });
}
