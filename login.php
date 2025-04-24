<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Admin - HaLu</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      height: 100vh;
      display: flex;
      overflow: hidden;
    }

    .container {
      position: relative;
      width: 100%;
      display: flex;
    }

    .left-panel {
      width: 30%;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      z-index: 2;
    }

    .left-panel img {
      width: 150px;
      margin-bottom: 20px;
    }

    .left-panel h1 {
      margin: 0;
      font-size: 32px;
      color: #000;
    }

    .left-panel p {
      font-size: 18px;
      color: #444;
    }

    .right-panel {
  position: absolute;
  right: 0;
  width: 70%;
  height: 100%;
  background: #004aad;
  clip-path: polygon(40% 0%, 100% 0%, 100% 100%, 20% 100%);
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-left: 500px;
  color: white;
  z-index: 1;
}


    .right-panel h2 {
      font-size: 28px;
      font-weight: bold;
    }

    .form-group {
      margin: 20px 0;
      max-width: 300px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border-radius: 5px;
      border: none;
      font-size: 14px;
    }

    .btn-signin {
      background: #007bff;
      color: white;
      padding: 12px;
      border: none;
      width: 300px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-signin:hover {
      background: #005dc1;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <img src="bg login.png" alt="Logo Pesawat" />
      <h1>HaLu</h1>
      <p>healing dulu</p>
    </div>

    <div class="right-panel">
      <h2>Welcome <br> <strong>Admin</strong></h2>

      <form method="POST" action="session.php">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="" required />
      </div>
      <button class="btn-signin">SIGN IN</button>
    </form>

    </div>
  </div>
</body>
</html>
