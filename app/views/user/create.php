<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User/Create</title>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Rajdhani', 'Arial Black', sans-serif;
      background: linear-gradient(135deg, #0a0a0a, #1a1a1a, #0f0f0f);
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #e5e5e5;
      position: relative;
    }

    /* Dark grid overlay for industrial look */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: 
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
      background-size: 30px 30px;
      pointer-events: none;
      z-index: -1;
    }

    .form-container {
      background: #1a1a1a;
      padding: 40px 50px;
      border: 2px solid #333;
      box-shadow: 
        0 15px 35px rgba(0,0,0,0.7),
        inset 0 1px 0 rgba(255,255,255,0.05);
      width: 420px;
      animation: slideInUp 0.8s ease-out;
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    .form-container::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 35px;
      font-family: 'Orbitron', monospace;
      font-size: 28px;
      font-weight: 900;
      color: #ff6b35;
      text-transform: uppercase;
      letter-spacing: 3px;
      text-shadow: 
        0 0 10px rgba(255, 107, 53, 0.5),
        0 0 20px rgba(255, 107, 53, 0.3);
      position: relative;
    }

    .form-container h1::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    label {
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      font-size: 16px;
      display: block;
      margin-top: 20px;
      margin-bottom: 8px;
      color: #ff6b35;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
    }

    label::before {
      content: '▶';
      margin-right: 8px;
      color: #666;
      font-size: 12px;
    }

    .input-group {
      position: relative;
      margin-bottom: 5px;
    }

    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 16px 20px;
      border: 2px solid #333;
      border-radius: 0;
      outline: none;
      transition: all 0.3s ease;
      font-family: 'Rajdhani', sans-serif;
      font-size: 16px;
      font-weight: 500;
      background: #0f0f0f;
      color: #e5e5e5;
      position: relative;
    }

    input[type="text"]::placeholder, input[type="email"]::placeholder {
      color: #666;
      font-weight: 400;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 14px;
    }

    .input-group::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #ff6b35, #e55a2b);
      transition: width 0.4s ease;
    }

    input[type="text"]:focus, input[type="email"]:focus {
      border-color: #ff6b35;
      background: #1a1a1a;
      box-shadow: 
        0 0 20px rgba(255, 107, 53, 0.2),
        inset 0 1px 0 rgba(255,255,255,0.1);
    }

    input[type="text"]:focus + .input-group::before,
    input[type="email"]:focus + .input-group::before {
      width: 100%;
    }

    .form-container .input-group:focus-within::before {
      width: 100%;
    }

    .submit-container {
      margin-top: 35px;
      position: relative;
    }

    input[type="submit"] {
      width: 100%;
      padding: 18px;
      background: linear-gradient(135deg, #333, #1a1a1a);
      color: #ff6b35;
      font-family: 'Rajdhani', sans-serif;
      font-size: 18px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      border: 2px solid #ff6b35;
      border-radius: 0;
      cursor: pointer;
      box-shadow: 
        0 8px 20px rgba(0,0,0,0.4),
        inset 0 1px 0 rgba(255,255,255,0.1);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    input[type="submit"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,107,53,0.3), transparent);
      transition: left 0.6s ease;
    }

    input[type="submit"]:hover::before {
      left: 100%;
    }

    input[type="submit"]:hover {
      color: #fff;
      background: linear-gradient(135deg, #ff6b35, #e55a2b);
      border-color: #fff;
      transform: translateY(-3px);
      box-shadow: 
        0 12px 25px rgba(0,0,0,0.5),
        0 0 30px rgba(255, 107, 53, 0.4),
        inset 0 1px 0 rgba(255,255,255,0.2);
    }

    input[type="submit"]:active {
      transform: translateY(-1px);
      transition: transform 0.1s ease;
    }

    /* Glowing pulse animation for submit button */
    @keyframes pulse-glow {
      0%, 100% { 
        box-shadow: 
          0 8px 20px rgba(0,0,0,0.4),
          inset 0 1px 0 rgba(255,255,255,0.1),
          0 0 0 rgba(255, 107, 53, 0);
      }
      50% { 
        box-shadow: 
          0 8px 20px rgba(0,0,0,0.4),
          inset 0 1px 0 rgba(255,255,255,0.1),
          0 0 20px rgba(255, 107, 53, 0.2);
      }
    }

    input[type="submit"] {
      animation: pulse-glow 3s ease-in-out infinite;
    }

    input[type="submit"]:hover {
      animation: none;
    }

    @keyframes slideInUp {
      from { 
        opacity: 0; 
        transform: translateY(50px) scale(0.9); 
      }
      to { 
        opacity: 1; 
        transform: translateY(0) scale(1); 
      }
    }

    /* Additional industrial elements */
    .form-container .corner-accent {
      position: absolute;
      width: 20px;
      height: 20px;
      border: 2px solid #ff6b35;
    }

    .form-container .corner-accent.top-left {
      top: 15px;
      left: 15px;
      border-right: none;
      border-bottom: none;
    }

    .form-container .corner-accent.top-right {
      top: 15px;
      right: 15px;
      border-left: none;
      border-bottom: none;
    }

    .form-container .corner-accent.bottom-left {
      bottom: 15px;
      left: 15px;
      border-right: none;
      border-top: none;
    }

    .form-container .corner-accent.bottom-right {
      bottom: 15px;
      right: 15px;
      border-left: none;
      border-top: none;
    }

    /* Responsive adjustments */
    @media (max-width: 480px) {
      .form-container {
        width: 95%;
        padding: 30px 25px;
      }
      
      .form-container h1 {
        font-size: 24px;
        letter-spacing: 2px;
      }
      
      input[type="text"], input[type="email"] {
        padding: 14px 16px;
        font-size: 15px;
      }
      
      input[type="submit"] {
        padding: 16px;
        font-size: 16px;
        letter-spacing: 1px;
      }
    }

    /* Focus states for accessibility */
    input:focus {
      outline: 2px solid #ff6b35;
      outline-offset: 2px;
    }

    /* Additional tech-inspired details */
    .form-container .tech-line {
      position: absolute;
      height: 1px;
      background: linear-gradient(90deg, transparent, #333, transparent);
      width: 100%;
      left: 0;
    }

    .form-container .tech-line.top {
      top: 60px;
    }

    .form-container .tech-line.bottom {
      bottom: 80px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="corner-accent top-left"></div>
    <div class="corner-accent top-right"></div>
    <div class="corner-accent bottom-left"></div>
    <div class="corner-accent bottom-right"></div>
    <div class="tech-line top"></div>
    <div class="tech-line bottom"></div>
    
    <h1>Create New User</h1>
    <form method="post" action="">
      <label for="username">Username</label>
      <div class="input-group">
        <input type="text" name="username" id="username" placeholder="Enter username" required>
      </div>

      <label for="email">Email Address</label>
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder="Enter email address" required>
      </div>

      <div class="submit-container">
        <input type="submit" value="▶ CREATE USER">
      </div>
    </form>
  </div>
</body>
</html>