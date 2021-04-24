<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      :root {
        font-size: 62.5%;
      }
      body {
        font-family: sans-serif;
        background: #5dc1b9;
      }

      .containerForm {
        height: 100vh;
        display: flex;
        justify-content: center;
      }
      .contentForm {
        display: flex;
      }
      form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        flex-direction: column;
        background: rgb(248, 244, 244);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px black;
      }
      h1 {
        font-size: 4rem;
        margin-bottom: 20px;
        text-shadow: 0 1px 4px grey;
      }
      input {
        margin-bottom: 20px;
        width: calc(100vw - 100px);
        border: 0;
        border-bottom: black solid 1px;
        line-height: 3rem;
        font-size: 1.5rem;
        background: transparent;
      }
      input::placeholder {
        color: black;
      }
      button {
        height: 37px;
        width: 156px;
        margin: 10px auto;
        border-radius: 50px;
        background: #256d7b;
        color: white;
        outline: none;
        border: 0;
        box-shadow: 0 4px 8px black;
      }
    </style>
    <title>Newsletter</title>
  </head>
  <body>
    <section class="containerForm">
      <div class="contentForm">
        <form method="POST" action="registro.php">
          <h1>Suscribete</h1>
          <input
            type="text"
            name="nombre"
            placeholder="Ingrese su nombre"
            required
          />
          <input type="email" name="email" placeholder="Ingrese su email" />
          <input type="text" name="ciudad" placeholder="Ingrese tu Ciudad" />
          <button type="submit">Suscribirme</button>
        </form>
      </div>
    </section>
  </body>
</html>
