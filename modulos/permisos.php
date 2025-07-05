<?php
include '../layouts/header.php'
?>
<!-- AQUÍ VA EL FORMULARIO -->
<div class="form-container">
    <h2>Permiso</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required />
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
        </div>
        <div class="form-group fecha">
            <input type="date" name="" id="">
            <input type="time" name="" id="">
        </div>
        <center>
            <button type="submit" class="btn-submit">Enviar</button>
            <button type="submit" class="btn-submit cancel">Cancelar</button>
        </center>
    </form>
</div>

</div>
</div>

<!--<div class="container">
    <div class="card">
        <img src="https://i.pravatar.cc/50?img=1" alt="Avatar">
        <div class="message">
            <h3>Darin Schiller</h3>
            <p>The UDP capacitor is down, connect t…</p>
        </div>
    </div>
    <div class="card">
        <img src="https://i.pravatar.cc/50?img=2" alt="Avatar">
        <div class="message">
            <h3>Norman Stiedemann-Ullrich</h3>
            <p>Use the 1080p USB protocol, then you…</p>
        </div>
    </div>
    <div class="card">
        <img src="https://i.pravatar.cc/50?img=3" alt="Avatar">
        <div class="message">
            <h3>Darren Rath IV</h3>
            <p>If we bypass the port, we can get to th…</p>
        </div>
    </div>
</div>
<style>
    .container {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .card {
        background-color: #2a3556;
        color: #ffffff;
        border-radius: 15px;
        display: flex;
        align-items: center;
        padding: 10px 20px;
        width: 500px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 15px;
    }

    .message h3 {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
    }

    .message p {
        margin: 5px 0 0;
        color: #cccccc;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>-->

<?php
include '../layouts/footer.php'
?>