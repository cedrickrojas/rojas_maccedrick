<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User/Create</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;600;700&family=Barlow:wght@600;700&display=swap');
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Barlow', sans-serif;
      background: #0a0a0a;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #e2e8f0;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        linear-gradient(135deg, rgba(255,69,0,0.03) 0%, transparent 50%),
        radial-gradient(circle at 20% 80%, rgba(255,69,0,0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(139,0,0,0.06) 0%, transparent 50%);
      pointer-events: none;
    }

    .form-container {
      background: linear-gradient(145deg, #111111, #0d0d0d);
      padding: 45px 40px;
      border-radius: 4px;
      box-shadow: 
        0 0 60px rgba(255,69,0,0.15),
        inset 0 1px 0 rgba(255,255,255,0.05),
        0 20px 40px rgba(0,0,0,0.6);
      width: 440px;
      max-width: 90%;
      animation: slideUp 0.6s ease-out;
      border: 2px solid #1a1a1a;
      position: relative;
      z-index: 1;
    }

    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, #ff4500, #8b0000, #ff4500);
      background-size: 200% 100%;
      animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
      0%, 100% { background-position: 200% 0; }
      50% { background-position: -200% 0; }
    }

    .form-container h1 {
      text-align: center;
      margin-bottom: 35px;
      font-size: 2.2rem;
      color: #ffffff;
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      letter-spacing: 3px;
      text-transform: uppercase;
      text-shadow: 0 0 20px rgba(255,69,0,0.4);
      position: relative;
      animation: fadeIn 0.8s ease-out 0.2s both;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-container h1::after {
      content: '';
      position: absolute;
      bottom: -12px;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff4500, transparent);
    }

    .form-group {
      margin-bottom: 22px;
      animation: fadeInUp 0.6s ease-out both;
    }

    .form-group:nth-child(1) { animation-delay: 0.3s; }
    .form-group:nth-child(2) { animation-delay: 0.4s; }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    label {
      font-weight: 700;
      display: block;
      margin-bottom: 8px;
      color: #b0b0b0;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 1.5px;
    }

    input[type="text"], 
    input[type="email"] {
      width: 100%;
      padding: 14px 18px;
      border: 1px solid #222;
      border-radius: 2px;
      outline: none;
      transition: all 0.3s ease;
      font-size: 15px;
      background: #0a0a0a;
      color: #ffffff;
      font-weight: 600;
      box-shadow: inset 0 2px 6px rgba(0,0,0,0.8);
      font-family: 'Barlow', sans-serif;
    }

    input[type="text"]:focus, 
    input[type="email"]:focus {
      background: #0f0f0f;
      border-color: #ff4500;
      box-shadow: 
        inset 0 2px 6px rgba(0,0,0,0.8),
        0 0 0 1px #ff4500,
        0 0 20px rgba(255,69,0,0.2);
    }

    input[type="submit"] {
      margin-top: 30px;
      width: 100%;
      padding: 16px;
      background: linear-gradient(135deg, #ff4500 0%, #8b0000 100%);
      color: white;
      font-size: 15px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      border: none;
      border-radius: 2px;
      cursor: pointer;
      box-shadow: 
        0 8px 20px rgba(255,69,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.1);
      transition: all 0.3s ease;
      font-family: 'Rajdhani', sans-serif;
      position: relative;
      overflow: hidden;
      animation: fadeInUp 0.6s ease-out 0.5s both;
    }

    input[type="submit"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s ease;
    }

    input[type="submit"]:hover::before {
      left: 100%;
    }

    input[type="submit"]:hover {
      background: linear-gradient(135deg, #ff5a1f 0%, #a00000 100%);
      transform: translateY(-2px);
      box-shadow: 
        0 10px 30px rgba(255,69,0,0.4),
        inset 0 1px 0 rgba(255,255,255,0.1);
    }

    input[type="submit"]:active {
      transform: translateY(0);
      box-shadow: 
        0 4px 12px rgba(255,69,0,0.3),
        inset 0 1px 0 rgba(255,255,255,0.1);
    }

    .back-link {
      display: inline-block;
      margin-top: 25px;
      color: #ff4500;
      font-weight: 700;
      text-decoration: none;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      animation: fadeInUp 0.6s ease-out 0.6s both;
    }

    .back-link:hover {
      color: #ff6a33;
      transform: translateX(-5px);
    }

    .back-link::before {
      content: '← ';
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 35px 30px;
      }

      .form-container h1 {
        font-size: 1.8rem;
        letter-spacing: 2px;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create User</h1>
    <form method="post" action="">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required autocomplete="username">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" required autocomplete="email">
      </div>

      <input type="submit" value="Create User">
    </form>
    <a href="<?= site_url('user/view'); ?>" class="back-link">Back to User List</a>
  </div>
</body>
</html> 