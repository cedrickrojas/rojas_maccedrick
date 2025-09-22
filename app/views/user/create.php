<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STARK INDUSTRIES - Create New User</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Exo 2', 'Arial', sans-serif;
      background: radial-gradient(ellipse at center, #0a0a0a 0%, #000000 100%);
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      color: #00d4ff;
      position: relative;
      overflow: hidden;
    }

    /* JARVIS Interface Grid */
    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: 
        linear-gradient(rgba(0, 212, 255, 0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 212, 255, 0.03) 1px, transparent 1px);
      background-size: 50px 50px;
      pointer-events: none;
      z-index: -2;
      animation: grid-pulse 4s ease-in-out infinite alternate;
    }

    /* Arc Reactor Ambient Glow */
    body::after {
      content: '';
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(0, 212, 255, 0.15) 0%, rgba(255, 215, 0, 0.08) 40%, transparent 70%);
      pointer-events: none;
      z-index: -1;
      animation: ambient-pulse 8s ease-in-out infinite;
    }

    @keyframes grid-pulse {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 0.8; }
    }

    @keyframes ambient-pulse {
      0%, 100% { 
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.3;
      }
      50% { 
        transform: translate(-50%, -50%) scale(1.1);
        opacity: 0.6;
      }
    }

    /* Mini Arc Reactor HUD */
    .mini-reactor-hud {
      position: fixed;
      top: 30px;
      left: 30px;
      width: 80px;
      height: 80px;
      border: 1px solid #00d4ff;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(0, 212, 255, 0.1) 100%);
      box-shadow: 
        0 0 20px rgba(0, 212, 255, 0.3),
        inset 0 0 20px rgba(0, 212, 255, 0.1);
      z-index: 1000;
      pointer-events: none;
      animation: reactor-spin 12s linear infinite;
    }

    .mini-reactor-hud::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 25px;
      height: 25px;
      background: radial-gradient(circle, #ffd700 20%, #00d4ff 80%);
      border-radius: 50%;
      box-shadow: 
        0 0 15px #ffd700,
        0 0 30px #00d4ff;
      animation: core-pulse 3s ease-in-out infinite alternate;
    }

    .mini-reactor-hud::after {
      content: '';
      position: absolute;
      top: 8px;
      left: 8px;
      right: 8px;
      bottom: 8px;
      border: 1px solid rgba(0, 212, 255, 0.4);
      border-radius: 50%;
      background: repeating-conic-gradient(
        from 0deg,
        transparent 0deg,
        transparent 40deg,
        rgba(0, 212, 255, 0.2) 50deg,
        transparent 60deg
      );
    }

    @keyframes reactor-spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes core-pulse {
      0% { 
        box-shadow: 0 0 15px #ffd700, 0 0 30px #00d4ff;
        transform: translate(-50%, -50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 25px #ffd700, 0 0 45px #00d4ff;
        transform: translate(-50%, -50%) scale(1.1);
      }
    }

    /* Holographic Form Container */
    .form-container {
      background: rgba(0, 0, 0, 0.85);
      padding: 50px 60px;
      border: 2px solid #00d4ff;
      border-radius: 15px;
      box-shadow: 
        0 0 40px rgba(0, 212, 255, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1),
        inset 0 -1px 0 rgba(0, 212, 255, 0.2);
      width: 480px;
      animation: materialize 1s ease-out;
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #00d4ff, #ffd700, #00d4ff, transparent);
      animation: interface-scan 3s linear infinite;
    }

    .form-container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        linear-gradient(135deg, transparent 0%, rgba(0, 212, 255, 0.03) 50%, transparent 100%),
        linear-gradient(-45deg, transparent 0%, rgba(255, 215, 0, 0.02) 50%, transparent 100%);
      pointer-events: none;
      border-radius: 15px;
    }

    @keyframes interface-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    @keyframes materialize {
      from { 
        opacity: 0; 
        transform: translateY(30px) scale(0.95);
        box-shadow: 0 0 0 rgba(0, 212, 255, 0);
      }
      to { 
        opacity: 1; 
        transform: translateY(0) scale(1);
        box-shadow: 
          0 0 40px rgba(0, 212, 255, 0.4),
          inset 0 1px 0 rgba(255, 255, 255, 0.1),
          inset 0 -1px 0 rgba(0, 212, 255, 0.2);
      }
    }

    /* JARVIS Form Header */
    .form-container h1 {
      text-align: center;
      margin-bottom: 45px;
      font-family: 'Orbitron', monospace;
      font-size: 28px;
      font-weight: 900;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 4px;
      text-shadow: 
        0 0 10px #00d4ff,
        0 0 20px #00d4ff;
      position: relative;
      animation: holographic-text 3s ease-in-out infinite alternate;
    }

    .form-container h1::before {
      content: 'STARK INDUSTRIES';
      position: absolute;
      top: -35px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 12px;
      font-weight: 400;
      letter-spacing: 3px;
      color: #ffd700;
      text-shadow: 0 0 12px #ffd700;
    }

    .form-container h1::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 200px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #00d4ff, #ffd700, #00d4ff, transparent);
      box-shadow: 0 0 15px #00d4ff;
      animation: scan-line 2.5s linear infinite;
    }

    @keyframes holographic-text {
      0%, 94%, 100% { 
        opacity: 1;
        text-shadow: 
          0 0 10px #00d4ff,
          0 0 20px #00d4ff;
      }
      96%, 98% { 
        opacity: 0.8;
        text-shadow: 
          0 0 5px #00d4ff,
          0 0 15px #00d4ff;
      }
    }

    @keyframes scan-line {
      0% { transform: translateX(-50%) scaleX(0); }
      50% { transform: translateX(-50%) scaleX(1); }
      100% { transform: translateX(-50%) scaleX(0); }
    }

    /* JARVIS Input Labels */
    label {
      font-family: 'Exo 2', sans-serif;
      font-weight: 600;
      font-size: 14px;
      display: block;
      margin-top: 30px;
      margin-bottom: 12px;
      color: #00d4ff;
      text-transform: uppercase;
      letter-spacing: 2px;
      position: relative;
      text-shadow: 0 0 8px rgba(0, 212, 255, 0.6);
    }

    label::before {
      content: '◢';
      margin-right: 12px;
      color: #ffd700;
      font-size: 16px;
      text-shadow: 0 0 10px #ffd700;
      animation: indicator-pulse 2.5s ease-in-out infinite;
    }

    @keyframes indicator-pulse {
      0%, 100% { 
        transform: scale(1);
        color: #ffd700;
        text-shadow: 0 0 10px #ffd700;
      }
      50% { 
        transform: scale(1.1);
        color: #00d4ff;
        text-shadow: 0 0 15px #00d4ff;
      }
    }

    /* Holographic Input Fields */
    .input-group {
      position: relative;
      margin-bottom: 8px;
    }

    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 20px 25px;
      border: 2px solid #00d4ff;
      border-radius: 8px;
      outline: none;
      transition: all 0.3s ease;
      font-family: 'Exo 2', sans-serif;
      font-size: 16px;
      font-weight: 400;
      background: rgba(0, 0, 0, 0.7);
      color: #00d4ff;
      position: relative;
      box-shadow: 
        0 0 20px rgba(0, 212, 255, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    input[type="text"]::placeholder, input[type="email"]::placeholder {
      color: rgba(0, 212, 255, 0.5);
      font-weight: 300;
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
      background: linear-gradient(90deg, #ffd700, #00d4ff);
      transition: width 0.4s ease;
      z-index: 2;
    }

    .input-group::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.3), transparent);
      animation: field-scan 4s linear infinite;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    @keyframes field-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    input[type="text"]:focus, input[type="email"]:focus {
      border-color: #ffd700;
      background: rgba(0, 30, 60, 0.8);
      box-shadow: 
        0 0 30px rgba(255, 215, 0, 0.4),
        0 0 50px rgba(0, 212, 255, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
      color: #fff;
      transform: translateY(-2px);
    }

    .input-group:focus-within::before {
      width: 100%;
    }

    .input-group:focus-within::after {
      opacity: 1;
    }

    /* Arc Reactor Submit Button */
    .submit-container {
      margin-top: 45px;
      position: relative;
    }

    input[type="submit"] {
      width: 100%;
      padding: 22px;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(0, 30, 60, 0.8) 100%);
      color: #00d4ff;
      font-family: 'Orbitron', monospace;
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 3px;
      border: 2px solid #00d4ff;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 
        0 0 30px rgba(0, 212, 255, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    input[type="submit"]::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 20px;
      transform: translateY(-50%);
      width: 12px;
      height: 12px;
      background: radial-gradient(circle, #ffd700 30%, #00d4ff 70%);
      border-radius: 50%;
      box-shadow: 
        0 0 15px #ffd700,
        0 0 25px #00d4ff;
      animation: reactor-glow 2.5s ease-in-out infinite alternate;
    }

    @keyframes reactor-glow {
      0% { 
        box-shadow: 0 0 15px #ffd700, 0 0 25px #00d4ff;
        transform: translateY(-50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 25px #ffd700, 0 0 35px #00d4ff;
        transform: translateY(-50%) scale(1.2);
      }
    }

    input[type="submit"]::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.3), transparent);
      transition: left 0.5s ease;
    }

    input[type="submit"]:hover::after {
      left: 100%;
    }

    input[type="submit"]:hover {
      color: #ffd700;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(60, 30, 0, 0.8) 100%);
      border-color: #ffd700;
      box-shadow: 
        0 0 40px rgba(255, 215, 0, 0.6),
        0 0 60px rgba(0, 212, 255, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
      transform: translateY(-3px);
    }

    input[type="submit"]:active {
      transform: translateY(-1px);
      transition: transform 0.1s ease;
      box-shadow: 
        0 0 25px rgba(0, 212, 255, 0.5),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    /* Holographic Corner Indicators */
    .corner-indicator {
      position: absolute;
      width: 20px;
      height: 20px;
      border: 2px solid #00d4ff;
      background: rgba(0, 212, 255, 0.1);
      animation: corner-pulse 3s ease-in-out infinite alternate;
    }

    .corner-indicator.top-left {
      top: 15px;
      left: 15px;
      border-right: none;
      border-bottom: none;
      box-shadow: -2px -2px 10px rgba(0, 212, 255, 0.3);
    }

    .corner-indicator.top-right {
      top: 15px;
      right: 15px;
      border-left: none;
      border-bottom: none;
      box-shadow: 2px -2px 10px rgba(0, 212, 255, 0.3);
    }

    .corner-indicator.bottom-left {
      bottom: 15px;
      left: 15px;
      border-right: none;
      border-top: none;
      box-shadow: -2px 2px 10px rgba(0, 212, 255, 0.3);
    }

    .corner-indicator.bottom-right {
      bottom: 15px;
      right: 15px;
      border-left: none;
      border-top: none;
      box-shadow: 2px 2px 10px rgba(0, 212, 255, 0.3);
    }

    @keyframes corner-pulse {
      0% { 
        opacity: 0.4;
        box-shadow: -2px -2px 5px rgba(0, 212, 255, 0.2);
      }
      100% { 
        opacity: 0.8;
        box-shadow: -2px -2px 15px rgba(0, 212, 255, 0.5);
      }
    }

    /* JARVIS Data Lines */
    .data-line {
      position: absolute;
      height: 1px;
      background: repeating-linear-gradient(
        90deg,
        transparent 0px,
        transparent 8px,
        rgba(0, 212, 255, 0.4) 10px,
        rgba(0, 212, 255, 0.4) 12px
      );
      opacity: 0.6;
      animation: data-flow 4s linear infinite;
    }

    .data-line.top {
      top: 60px;
      left: 20%;
      right: 20%;
    }

    .data-line.bottom {
      bottom: 80px;
      left: 15%;
      right: 15%;
      animation-direction: reverse;
      animation-duration: 5s;
    }

    @keyframes data-flow {
      0% { background-position: 0px 0px; }
      100% { background-position: 40px 0px; }
    }

    /* Status Indicator */
    .form-status {
      position: fixed;
      bottom: 30px;
      right: 30px;
      padding: 10px 20px;
      background: rgba(0, 0, 0, 0.8);
      border: 1px solid #00d4ff;
      border-radius: 25px;
      color: #00d4ff;
      font-family: 'Exo 2', sans-serif;
      font-size: 12px;
      font-weight: 400;
      box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
      z-index: 1000;
      pointer-events: none;
    }

    .form-status::before {
      content: '●';
      margin-right: 8px;
      color: #00ff00;
      animation: status-blink 2s ease-in-out infinite;
    }

    @keyframes status-blink {
      0%, 50% { opacity: 1; }
      51%, 100% { opacity: 0.3; }
    }

    /* Responsive Design */
    @media (max-width: 520px) {
      .form-container {
        width: 95%;
        padding: 40px 35px;
        margin: 20px;
      }
      
      .form-container h1 {
        font-size: 24px;
        letter-spacing: 2px;
      }
      
      input[type="text"], input[type="email"] {
        padding: 18px 22px;
        font-size: 15px;
      }
      
      input[type="submit"] {
        padding: 20px;
        font-size: 15px;
        letter-spacing: 2px;
      }

      .mini-reactor-hud {
        width: 60px;
        height: 60px;
        top: 20px;
        left: 20px;
      }

      .mini-reactor-hud::before {
        width: 18px;
        height: 18px;
      }

      .form-status {
        bottom: 20px;
        right: 20px;
        padding: 8px 16px;
        font-size: 11px;
      }
    }

    /* Floating Tech Elements */
    .floating-element {
      position: fixed;
      pointer-events: none;
      z-index: -1;
      opacity: 0.3;
    }

    .tech-circle {
      top: 20%;
      right: 15%;
      width: 60px;
      height: 60px;
      border: 1px solid rgba(0, 212, 255, 0.3);
      border-radius: 50%;
      animation: float-circle 6s ease-in-out infinite;
    }

    .tech-square {
      bottom: 25%;
      left: 10%;
      width: 40px;
      height: 40px;
      border: 1px solid rgba(255, 215, 0, 0.3);
      transform: rotate(45deg);
      animation: float-square 8s ease-in-out infinite;
    }

    @keyframes float-circle {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-15px) rotate(180deg); }
    }

    @keyframes float-square {
      0%, 100% { transform: rotate(45deg) scale(1); }
      50% { transform: rotate(225deg) scale(1.1); }
    }
  </style>
</head>
<body>
  <!-- Mini Arc Reactor HUD -->
  <div class="mini-reactor-hud"></div>

  <!-- Floating Tech Elements -->
  <div class="floating-element tech-circle"></div>
  <div class="floating-element tech-square"></div>

  <!-- JARVIS Form Status -->
  <div class="form-status">FORM READY</div>

  <div class="form-container">
    <div class="corner-indicator top-left"></div>
    <div class="corner-indicator top-right"></div>
    <div class="corner-indicator bottom-left"></div>
    <div class="corner-indicator bottom-right"></div>
    <div class="data-line top"></div>
    <div class="data-line bottom"></div>
    
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
        <input type="submit" value="INITIALIZE USER">
      </div>
    </form>
  </div>
</body>
</html>