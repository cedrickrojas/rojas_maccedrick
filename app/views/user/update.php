<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STARK INDUSTRIES</title>
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

    /* Arc Reactor Ambient Glow - Enhanced for Update Mode */
    body::after {
      content: '';
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 700px;
      height: 700px;
      background: radial-gradient(circle, rgba(255, 165, 0, 0.12) 0%, rgba(0, 212, 255, 0.08) 50%, transparent 70%);
      pointer-events: none;
      z-index: -1;
      animation: update-ambient-pulse 6s ease-in-out infinite;
    }

    @keyframes grid-pulse {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 0.8; }
    }

    @keyframes update-ambient-pulse {
      0%, 100% { 
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.4;
      }
      50% { 
        transform: translate(-50%, -50%) scale(1.15);
        opacity: 0.7;
      }
    }

    /* Advanced Arc Reactor HUD for Update Mode */
    .update-reactor-hud {
      position: fixed;
      top: 30px;
      left: 30px;
      width: 100px;
      height: 100px;
      border: 2px solid #ffa500;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(255, 165, 0, 0.15) 100%);
      box-shadow: 
        0 0 30px rgba(255, 165, 0, 0.4),
        inset 0 0 30px rgba(255, 165, 0, 0.1);
      z-index: 1000;
      pointer-events: none;
      animation: update-reactor-spin 8s linear infinite;
    }

    .update-reactor-hud::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 35px;
      height: 35px;
      background: radial-gradient(circle, #ffd700 20%, #ffa500 60%, #00d4ff 90%);
      border-radius: 50%;
      box-shadow: 
        0 0 20px #ffd700,
        0 0 40px #ffa500;
      animation: update-core-pulse 2s ease-in-out infinite alternate;
    }

    .update-reactor-hud::after {
      content: '';
      position: absolute;
      top: 8px;
      left: 8px;
      right: 8px;
      bottom: 8px;
      border: 1px solid rgba(255, 165, 0, 0.6);
      border-radius: 50%;
      background: repeating-conic-gradient(
        from 0deg,
        transparent 0deg,
        transparent 30deg,
        rgba(255, 165, 0, 0.3) 40deg,
        transparent 50deg
      );
    }

    @keyframes update-reactor-spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes update-core-pulse {
      0% { 
        box-shadow: 0 0 20px #ffd700, 0 0 40px #ffa500;
        transform: translate(-50%, -50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 30px #ffd700, 0 0 50px #ffa500, 0 0 60px #00d4ff;
        transform: translate(-50%, -50%) scale(1.1);
      }
    }

    /* Update Mode Holographic Form Container */
    .form-container {
      background: rgba(0, 0, 0, 0.85);
      padding: 55px 65px;
      border: 2px solid #ffa500;
      border-radius: 15px;
      box-shadow: 
        0 0 50px rgba(255, 165, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1),
        inset 0 -1px 0 rgba(255, 165, 0, 0.2);
      width: 500px;
      animation: update-materialize 1s ease-out;
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
      background: linear-gradient(90deg, transparent, #ffa500, #ffd700, #00d4ff, #ffa500, transparent);
      animation: update-interface-scan 2.5s linear infinite;
    }

    .form-container::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        linear-gradient(135deg, transparent 0%, rgba(255, 165, 0, 0.04) 50%, transparent 100%),
        linear-gradient(-45deg, transparent 0%, rgba(0, 212, 255, 0.02) 50%, transparent 100%);
      pointer-events: none;
      border-radius: 15px;
    }

    @keyframes update-interface-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    @keyframes update-materialize {
      from { 
        opacity: 0; 
        transform: translateY(40px) scale(0.9);
        box-shadow: 0 0 0 rgba(255, 165, 0, 0);
      }
      to { 
        opacity: 1; 
        transform: translateY(0) scale(1);
        box-shadow: 
          0 0 50px rgba(255, 165, 0, 0.4),
          inset 0 1px 0 rgba(255, 255, 255, 0.1),
          inset 0 -1px 0 rgba(255, 165, 0, 0.2);
      }
    }

    /* JARVIS Update Form Header */
    .form-container h1 {
      text-align: center;
      margin-bottom: 40px;
      font-family: 'Orbitron', monospace;
      font-size: 30px;
      font-weight: 900;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 4px;
      text-shadow: 
        0 0 10px #ffa500,
        0 0 20px #ffa500,
        0 0 30px #00d4ff;
      position: relative;
      animation: update-holographic-text 3s ease-in-out infinite alternate;
    }

    .form-container h1::before {
      content: 'STARK INDUSTRIES - UPDATE MODE';
      position: absolute;
      top: -35px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 11px;
      font-weight: 400;
      letter-spacing: 3px;
      color: #ffa500;
      text-shadow: 0 0 12px #ffa500;
    }

    .form-container h1::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 220px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ffa500, #ffd700, #00d4ff, #ffa500, transparent);
      box-shadow: 0 0 15px #ffa500;
      animation: update-scan-line 2.8s linear infinite;
    }

    @keyframes update-holographic-text {
      0%, 92%, 100% { 
        opacity: 1;
        text-shadow: 
          0 0 10px #ffa500,
          0 0 20px #ffa500,
          0 0 30px #00d4ff;
      }
      94%, 96% { 
        opacity: 0.8;
        text-shadow: 
          0 0 5px #ffa500,
          0 0 15px #ffa500,
          0 0 25px #00d4ff;
      }
    }

    @keyframes update-scan-line {
      0% { transform: translateX(-50%) scaleX(0); }
      50% { transform: translateX(-50%) scaleX(1); }
      100% { transform: translateX(-50%) scaleX(0); }
    }

    /* User ID Display with Update Status */
    .user-id-display {
      background: linear-gradient(135deg, rgba(255, 165, 0, 0.15), rgba(0, 212, 255, 0.1));
      border: 2px solid #ffa500;
      border-radius: 8px;
      padding: 18px 25px;
      margin-bottom: 30px;
      font-family: 'Orbitron', monospace;
      font-size: 16px;
      font-weight: 800;
      text-align: center;
      color: #ffa500;
      letter-spacing: 2px;
      text-transform: uppercase;
      box-shadow: 
        0 0 25px rgba(255, 165, 0, 0.3),
        inset 0 0 20px rgba(255, 165, 0, 0.1);
      position: relative;
      animation: user-id-pulse 3s ease-in-out infinite;
    }

    .user-id-display::before {
      content: '◢ TARGET USER ID: ';
      color: #00d4ff;
      text-shadow: 0 0 10px #00d4ff;
    }

    .user-id-display::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, #ffa500, transparent);
      animation: id-scan 4s linear infinite;
    }

    @keyframes user-id-pulse {
      0%, 100% { 
        box-shadow: 0 0 25px rgba(255, 165, 0, 0.3), inset 0 0 20px rgba(255, 165, 0, 0.1);
      }
      50% { 
        box-shadow: 0 0 35px rgba(255, 165, 0, 0.5), inset 0 0 30px rgba(255, 165, 0, 0.2);
      }
    }

    @keyframes id-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    /* Update Status Indicator */
    .status-indicator {
      position: absolute;
      top: -10px;
      right: -10px;
      width: 20px;
      height: 20px;
      background: radial-gradient(circle, #ffa500 30%, #ffd700 70%);
      border-radius: 50%;
      border: 2px solid #00d4ff;
      box-shadow: 
        0 0 20px rgba(255, 165, 0, 0.8),
        inset 0 0 10px rgba(0, 212, 255, 0.6);
      animation: update-status-pulse 2s ease-in-out infinite;
    }

    @keyframes update-status-pulse {
      0%, 100% { 
        opacity: 1; 
        transform: scale(1);
        box-shadow: 0 0 20px rgba(255, 165, 0, 0.8), inset 0 0 10px rgba(0, 212, 255, 0.6);
      }
      50% { 
        opacity: 0.7; 
        transform: scale(1.2);
        box-shadow: 0 0 30px rgba(255, 165, 0, 1), inset 0 0 15px rgba(0, 212, 255, 0.8);
      }
    }

    /* JARVIS Input Labels */
    label {
      font-family: 'Exo 2', sans-serif;
      font-weight: 600;
      font-size: 14px;
      display: block;
      margin-top: 30px;
      margin-bottom: 12px;
      color: #ffa500;
      text-transform: uppercase;
      letter-spacing: 2px;
      position: relative;
      text-shadow: 0 0 8px rgba(255, 165, 0, 0.6);
    }

    label::before {
      content: '◣';
      margin-right: 12px;
      color: #00d4ff;
      font-size: 16px;
      text-shadow: 0 0 10px #00d4ff;
      animation: update-indicator-pulse 2.2s ease-in-out infinite;
    }

    @keyframes update-indicator-pulse {
      0%, 100% { 
        transform: scale(1);
        color: #00d4ff;
        text-shadow: 0 0 10px #00d4ff;
      }
      50% { 
        transform: scale(1.1);
        color: #ffa500;
        text-shadow: 0 0 15px #ffa500;
      }
    }

    /* Enhanced Holographic Input Fields */
    .input-group {
      position: relative;
      margin-bottom: 8px;
    }

    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 22px 25px;
      border: 2px solid #ffa500;
      border-radius: 8px;
      outline: none;
      transition: all 0.3s ease;
      font-family: 'Exo 2', sans-serif;
      font-size: 16px;
      font-weight: 400;
      background: rgba(0, 0, 0, 0.7);
      color: #ffa500;
      position: relative;
      box-shadow: 
        0 0 25px rgba(255, 165, 0, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    input[type="text"]::placeholder, input[type="email"]::placeholder {
      color: rgba(255, 165, 0, 0.5);
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
      background: linear-gradient(90deg, #ffd700, #ffa500, #00d4ff);
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
      background: linear-gradient(90deg, transparent, rgba(255, 165, 0, 0.4), transparent);
      animation: update-field-scan 3.5s linear infinite;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    @keyframes update-field-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    input[type="text"]:focus, input[type="email"]:focus {
      border-color: #ffd700;
      background: rgba(30, 15, 0, 0.8);
      box-shadow: 
        0 0 35px rgba(255, 215, 0, 0.4),
        0 0 55px rgba(255, 165, 0, 0.2),
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

    /* Advanced Arc Reactor Submit Button */
    .submit-container {
      margin-top: 45px;
      position: relative;
    }

    input[type="submit"] {
      width: 100%;
      padding: 24px;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(60, 30, 0, 0.8) 100%);
      color: #ffa500;
      font-family: 'Orbitron', monospace;
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 3px;
      border: 2px solid #ffa500;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 
        0 0 35px rgba(255, 165, 0, 0.3),
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
      width: 14px;
      height: 14px;
      background: radial-gradient(circle, #ffd700 20%, #ffa500 60%, #00d4ff 90%);
      border-radius: 50%;
      box-shadow: 
        0 0 18px #ffd700,
        0 0 30px #ffa500;
      animation: update-reactor-glow 2s ease-in-out infinite alternate;
    }

    @keyframes update-reactor-glow {
      0% { 
        box-shadow: 0 0 18px #ffd700, 0 0 30px #ffa500;
        transform: translateY(-50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 25px #ffd700, 0 0 40px #ffa500, 0 0 50px #00d4ff;
        transform: translateY(-50%) scale(1.1);
      }
    }

    input[type="submit"]::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 165, 0, 0.3), transparent);
      transition: left 0.5s ease;
    }

    input[type="submit"]:hover::after {
      left: 100%;
    }

    input[type="submit"]:hover {
      color: #000;
      background: radial-gradient(circle, #ffa500 0%, #ffd700 100%);
      border-color: #fff;
      box-shadow: 
        0 0 50px rgba(255, 165, 0, 0.6),
        0 0 70px rgba(255, 215, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
      transform: translateY(-3px);
    }

    input[type="submit"]:active {
      transform: translateY(-1px);
      transition: transform 0.1s ease;
      box-shadow: 
        0 0 30px rgba(255, 165, 0, 0.5),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    /* Update Mode Corner Indicators */
    .corner-indicator {
      position: absolute;
      width: 22px;
      height: 22px;
      border: 2px solid #ffa500;
      background: rgba(255, 165, 0, 0.1);
      animation: update-corner-pulse 2.8s ease-in-out infinite alternate;
    }

    .corner-indicator.top-left {
      top: 15px;
      left: 15px;
      border-right: none;
      border-bottom: none;
      box-shadow: -3px -3px 10px rgba(255, 165, 0, 0.3);
    }

    .corner-indicator.top-right {
      top: 15px;
      right: 15px;
      border-left: none;
      border-bottom: none;
      box-shadow: 3px -3px 10px rgba(255, 165, 0, 0.3);
    }

    .corner-indicator.bottom-left {
      bottom: 15px;
      left: 15px;
      border-right: none;
      border-top: none;
      box-shadow: -3px 3px 10px rgba(255, 165, 0, 0.3);
    }

    .corner-indicator.bottom-right {
      bottom: 15px;
      right: 15px;
      border-left: none;
      border-top: none;
      box-shadow: 3px 3px 10px rgba(255, 165, 0, 0.3);
    }

    @keyframes update-corner-pulse {
      0% { 
        opacity: 0.5;
        box-shadow: -3px -3px 5px rgba(255, 165, 0, 0.2);
      }
      100% { 
        opacity: 0.9;
        box-shadow: -3px -3px 15px rgba(255, 165, 0, 0.6);
      }
    }

    /* JARVIS Data Lines - Update Mode */
    .data-line {
      position: absolute;
      height: 1px;
      background: repeating-linear-gradient(
        90deg,
        transparent 0px,
        transparent 8px,
        rgba(255, 165, 0, 0.5) 10px,
        rgba(255, 165, 0, 0.5) 12px
      );
      opacity: 0.7;
      animation: update-data-flow 3.5s linear infinite;
    }

    .data-line.top {
      top: 70px;
      left: 15%;
      right: 15%;
    }

    .data-line.bottom {
      bottom: 90px;
      left: 20%;
      right: 20%;
      animation-direction: reverse;
      animation-duration: 4s;
    }

    @keyframes update-data-flow {
      0% { background-position: 0px 0px; }
      100% { background-position: 40px 0px; }
    }

    /* Update Form Status */
    .form-status {
      position: fixed;
      bottom: 30px;
      right: 30px;
      padding: 12px 25px;
      background: rgba(0, 0, 0, 0.8);
      border: 1px solid #ffa500;
      border-radius: 25px;
      color: #ffa500;
      font-family: 'Exo 2', sans-serif;
      font-size: 12px;
      font-weight: 400;
      box-shadow: 0 0 25px rgba(255, 165, 0, 0.3);
      z-index: 1000;
      pointer-events: none;
    }

    .form-status::before {
      content: '●';
      margin-right: 8px;
      color: #ffd700;
      animation: update-status-blink 1.8s ease-in-out infinite;
    }

    @keyframes update-status-blink {
      0%, 50% { opacity: 1; }
      51%, 100% { opacity: 0.3; }
    }

    /* Responsive Design */
    @media (max-width: 540px) {
      .form-container {
        width: 95%;
        padding: 45px 35px;
        margin: 20px;
      }
      
      .form-container h1 {
        font-size: 26px;
        letter-spacing: 2px;
      }
      
      input[type="text"], input[type="email"] {
        padding: 20px 22px;
        font-size: 15px;
      }
      
      input[type="submit"] {
        padding: 22px;
        font-size: 15px;
        letter-spacing: 2px;
      }

      .update-reactor-hud {
        width: 70px;
        height: 70px;
        top: 20px;
        left: 20px;
      }

      .update-reactor-hud::before {
        width: 25px;
        height: 25px;
      }

      .form-status {
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        font-size: 11px;
      }

      .user-id-display {
        padding: 15px 20px;
        font-size: 14px;
      }
    }

    /* Floating Tech Elements - Update Mode */
    .floating-element {
      position: fixed;
      pointer-events: none;
      z-index: -1;
      opacity: 0.4;
    }

    .tech-diamond {
      top: 25%;
      right: 12%;
      width: 50px;
      height: 50px;
      border: 1px solid rgba(255, 165, 0, 0.4);
      transform: rotate(45deg);
      animation: float-diamond 7s ease-in-out infinite;
    }

    .tech-hexagon {
      bottom: 30%;
      left: 8%;
      width: 45px;
      height: 45px;
      border: 1px solid rgba(0, 212, 255, 0.3);
      clip-path: polygon(30% 0%, 70% 0%, 100% 50%, 70% 100%, 30% 100%, 0% 50%);
      animation: float-hexagon 9s ease-in-out infinite;
    }

    @keyframes float-diamond {
      0%, 100% { transform: rotate(45deg) translateY(0) scale(1); }
      50% { transform: rotate(225deg) translateY(-20px) scale(1.1); }
    }

    @keyframes float-hexagon {
      0%, 100% { transform: translateX(0) scale(1); opacity: 0.4; }
      50% { transform: translateX(15px) scale(1.15); opacity: 0.7; }
    }
  </style>
</head>
<body>
  <!-- Advanced Arc Reactor HUD for Update Mode -->
  <div class="update-reactor-hud"></div>

  <!-- Floating Tech Elements -->
  <div class="floating-element tech-diamond"></div>
  <div class="floating-element tech-hexagon"></div>

  <!-- JARVIS Update Form Status -->
  <div class="form-status">UPDATE MODE ACTIVE</div>

  <div class="form-container">
    <div class="status-indicator"></div>
    <div class="corner-indicator top-left"></div>
    <div class="corner-indicator top-right"></div>
    <div class="corner-indicator bottom-left"></div>
    <div class="corner-indicator bottom-right"></div>
    <div class="data-line top"></div>
    <div class="data-line bottom"></div>
    
    <h1>Update User</h1>
    
    <!-- Enhanced User ID Display -->
    <div class="user-id-display">
      <span>Loading User Data</span>
    </div>
    
    <form method="post" action="<?= site_url('user/update/'.$user['id']) ?>">
      <label for="username">Username</label>
      <div class="input-group">
        <input type="text" name="username" id="username" value="<?= html_escape($user['username']) ?>" placeholder="Modify Username" required>
      </div>

      <label for="email">Email Address</label>
      <div class="input-group">
        <input type="email" name="email" id="email" value="<?= html_escape($user['email']) ?>" placeholder="Modify Email Address" required>
      </div>

      <div class="submit-container">
        <input type="submit" value="EXECUTE UPDATE">
      </div>
    </form>
  </div>
</body>
</html>
    