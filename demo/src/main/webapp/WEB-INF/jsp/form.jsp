<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission</title>
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
        gap: 50px;
        background: linear-gradient(135deg, magenta, darkmagenta);
      }
      .main form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.2);
      }
      .main form button {
        color: white;
        background-color: darkmagenta;
        padding: 5px;
        border: 0;
        outline: 0;
        margin: 0 auto;
        width: 100%;
        border-radius: 8px;
      }
      .main form button:hover {
        box-shadow: 0 0 0 4px magenta 0 0 0 8px darkmagenta;
      }
      .main form label {
        font-weight: bold;
      }
      .main form input {
        padding: 5px 0;
        width: 100%;
        border-radius: 5px;
        outline: 0;
        border: 0;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <h3>Fill in Your Details</h3>
      <form action="/submitForm" method="post">
        <label for="name">Name:</label> <br />
        <input
          type="text"
          id="name"
          name="name"
          required
          placeholder="Enter name"
        /><br /><br />

        <label for="email">Email:</label> <br />
        <input
          type="email"
          id="email"
          name="email"
          required
          placeholder="Enter email"
        /><br /><br />

        <button type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
