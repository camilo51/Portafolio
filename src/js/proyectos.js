const contenedor = document.querySelector('.proyectos__contenedor');

fetch('https://api.github.com/users/camilo51/repos')
    .then(resp => resp.json())
    .then(respuesta => {

        if (contenedor.classList.contains('proyectos__contenedor--index')) {
            for (let i = 0; i < 4; i++) {
                contenedor.innerHTML += `
                    <div class="proyecto">
                        <img class="img" src="/assets/img/proyecto01.jpg" alt=" Imagen del proyecto">
                        <div class="proyecto__cuerpo">
                            <h3>${respuesta[i].name}</h3>
                        </div>
                    </div>
                `
            }
        }else{
            respuesta.forEach(repo => {
                
                contenedor.innerHTML += `
                <div class="proyecto">
                    <img class="img" src="/assets/img/proyecto01.jpg" alt=" Imagen del proyecto">
                    <div class="proyecto__cuerpo">
                        <h3>${repo.name}</h3>
                    </div>
                </div>
                `
            });
        }

    })