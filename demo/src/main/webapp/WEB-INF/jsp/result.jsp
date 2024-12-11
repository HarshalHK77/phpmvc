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
        font-family: "Poppins", sans-serif;
      }
      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
        background: linear-gradient(135deg, magenta, darkmagenta);
        color: white;
      }
    </style>
    <title>Submission Result</title>
  </head>
  <body>
    <div class="main">
      <h1>Submission Result</h1>
      <p>Name: ${formData.name}</p>
      <p>Email: ${formData.email}</p>
    </div>
  </body>
</html>
