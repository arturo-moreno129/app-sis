document.addEventListener('DOMContentLoaded', () => {
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");
  const signin = document.getElementById('signin');//inicio de sesion
  const singup = document.getElementById('singup');//registrar nuevo usuario
  const logout = document.getElementById("logout"); // salida del usuario


  if (sign_up_btn) {
    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });
  }


  if (sign_in_btn) {
    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });
  }

  if (signin) {
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
          window.location.href = 'modulos/loading';
        })
        .catch(error => {
          //console.error('Error al procesar la solicitud:', error);
          //alert('❌ Error de red o del servidor');
        });
    });
  }


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

  if (logout) {
    logout.addEventListener('click', () => {
      fetch('../crud.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'action=logout'
      })
        .then(response => response.json())
        .then(data => {
          //alert(data.message); // Mostrar mensaje
          if (data.status === "success") {
            window.location.href = "../index"; // Redirigir al login
          }
        })
        .catch(error => console.error('Error:', error));
    });
  }


  
  const toggle = document.querySelector('.toggle');
  const navigation = document.querySelector('.navigation');
  const main = document.querySelector('.main');

  // Al cargar la página, revisar si el menú estaba activo
  if (localStorage.getItem('menuOpen') === 'true') {
    navigation.classList.add('active');
    main.classList.add('menu-bar');
  }

  if (toggle) {
    toggle.addEventListener('click', () => {
      console.log('entro');
      navigation.classList.toggle('active');
      main.classList.toggle('menu-bar');

      // Guardar el estado actual
      const isOpen = navigation.classList.contains('active');
      localStorage.setItem('menuOpen', isOpen);
    });
  }


});