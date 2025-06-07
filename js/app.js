document.addEventListener('DOMContentLoaded', () => {
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");
  const signin = document.getElementById('signin');
  const singup = document.getElementById('singup')

  sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
  });

  sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
  });



  signin.addEventListener('click', (event) => {
    event.preventDefault(); // Evita que el formulario se envíe

    const user = document.getElementById('user').value;
    const pass = document.getElementById('pass').value;

    fetch('crud.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `action=login&user=${encodeURIComponent(user)}&contrasena=${encodeURIComponent(pass)}`
    })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'error') {
          //console.error(data.message);
          Swal.fire({
            title: "Usuario incorrecto pruebe de nuevo",
            confirmButtonColor: "#3085d6",//color del boton
            showClass: {
              popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                                    `
            },
            hideClass: {
              popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                                   `
            }
          });
          //alert(`❌ Error: ${data.message}`);
          return;
        }

        // Si el inicio de sesión fue exitoso
        //console.log(data.message);
        //alert(`✅ ${data.message}`);

        // Redireccionar, por ejemplo, a dashboard.html
        window.location.href = 'modulos/loading.html';
      })
      .catch(error => {
        //console.error('Error al procesar la solicitud:', error);
        //alert('❌ Error de red o del servidor');
      });
  });
  /***************************PARA REGISTRAR USUARIO**************************** */
  /*singup.addEventListener('click', (event) => {
    event.preventDefault(); // Evita que el formulario se envíe

    const user = document.getElementById('user').value;
    const pass = document.getElementById('pass').value;

    fetch('modulos/crud.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `action=login&user=${encodeURIComponent(user)}&contrasena=${encodeURIComponent(pass)}`
    })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'error') {
          console.error(data.message);
          //alert(`❌ Error: ${data.message}`);
          return;
        }

        // Si el inicio de sesión fue exitoso
        console.log(data.message);
        //alert(`✅ ${data.message}`);

        // Redireccionar, por ejemplo, a dashboard.html
        window.location.href = 'modulos/loading.html';
      })
      .catch(error => {
        console.error('Error al procesar la solicitud:', error);
        //alert('❌ Error de red o del servidor');
      });
  });*/


});