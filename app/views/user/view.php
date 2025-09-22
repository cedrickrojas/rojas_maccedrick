<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>STARK INDUSTRIES</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
      padding: 25px;
      color: #00d4ff;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
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

    /* Arc Reactor Glow Effect */
    body::after {
      content: '';
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 800px;
      height: 800px;
      background: radial-gradient(circle, rgba(0, 212, 255, 0.1) 0%, rgba(255, 215, 0, 0.05) 30%, transparent 70%);
      pointer-events: none;
      z-index: -1;
      animation: arc-reactor-pulse 6s ease-in-out infinite;
    }

    @keyframes grid-pulse {
      0%, 100% { opacity: 0.3; }
      50% { opacity: 0.8; }
    }

    @keyframes arc-reactor-pulse {
      0%, 100% { 
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.4;
      }
      50% { 
        transform: translate(-50%, -50%) scale(1.2);
        opacity: 0.8;
      }
    }

    h1 {
      text-align: center;
      margin-bottom: 50px;
      color: #fff;
      font-family: 'Orbitron', monospace;
      font-size: 3.5rem;
      font-weight: 900;
      letter-spacing: 6px;
      text-transform: uppercase;
      text-shadow: 
        0 0 10px #00d4ff,
        0 0 20px #00d4ff,
        0 0 40px #00d4ff;
      position: relative;
      animation: holographic-flicker 2s ease-in-out infinite alternate;
    }

    h1::before {
      content: 'STARK INDUSTRIES';
      position: absolute;
      top: -40px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 0.8rem;
      font-weight: 400;
      letter-spacing: 4px;
      color: #ffd700;
      text-shadow: 0 0 15px #ffd700;
    }

    h1::after {
      content: '';
      position: absolute;
      bottom: -20px;
      left: 50%;
      transform: translateX(-50%);
      width: 400px;
      height: 2px;
      background: linear-gradient(90deg, transparent, #00d4ff, #ffd700, #00d4ff, transparent);
      box-shadow: 0 0 20px #00d4ff;
      animation: scan-line 3s linear infinite;
    }

    @keyframes holographic-flicker {
      0%, 95%, 100% { 
        opacity: 1;
        text-shadow: 
          0 0 10px #00d4ff,
          0 0 20px #00d4ff,
          0 0 40px #00d4ff;
      }
      96%, 99% { 
        opacity: 0.8;
        text-shadow: 
          0 0 5px #00d4ff,
          0 0 15px #00d4ff,
          0 0 30px #00d4ff;
      }
    }

    @keyframes scan-line {
      0% { transform: translateX(-50%) scaleX(0); }
      50% { transform: translateX(-50%) scaleX(1); }
      100% { transform: translateX(-50%) scaleX(0); }
    }

    /* JARVIS Search Interface */
    .search-container {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }

    .search-container form {
      display: flex;
      width: 100%;
      max-width: 500px;
      background: rgba(0, 0, 0, 0.8);
      border: 2px solid #00d4ff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 
        0 0 30px rgba(0, 212, 255, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      position: relative;
    }

    .search-container form::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, #00d4ff, transparent);
      animation: interface-scan 2s linear infinite;
    }

    @keyframes interface-scan {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    .search-container input[type="text"] {
      padding: 20px 25px;
      border: none;
      outline: none;
      flex: 1;
      background: transparent;
      color: #00d4ff;
      font-family: 'Exo 2', sans-serif;
      font-size: 16px;
      font-weight: 400;
    }

    .search-container input[type="text"]::placeholder {
      color: rgba(0, 212, 255, 0.6);
      font-weight: 300;
    }

    .search-container .search-btn {
      padding: 20px 30px;
      border: none;
      cursor: pointer;
      background: linear-gradient(135deg, #00d4ff, #0099cc);
      color: #000;
      font-family: 'Exo 2', sans-serif;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: all 0.3s ease;
      position: relative;
      border-left: 2px solid rgba(255, 255, 255, 0.2);
    }

    .search-container .search-btn:hover {
      background: linear-gradient(135deg, #ffd700, #ffb300);
      box-shadow: 0 0 25px rgba(255, 215, 0, 0.6);
      transform: translateY(-2px);
    }

    .search-container .search-btn:active {
      transform: translateY(0);
      box-shadow: 0 0 15px rgba(0, 212, 255, 0.8);
    }

    /* Arc Reactor Create Button */
    .btn-container {
      width: 90%;
      margin: 0 auto 40px auto;
      text-align: right;
    }

    .create-btn {
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(0, 30, 60, 0.8) 100%);
      color: #00d4ff;
      padding: 18px 40px;
      text-decoration: none;
      border: 2px solid #00d4ff;
      border-radius: 50px;
      font-family: 'Exo 2', sans-serif;
      font-weight: 600;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 3px;
      box-shadow: 
        0 0 30px rgba(0, 212, 255, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
      display: inline-block;
      position: relative;
      overflow: hidden;
    }

    .create-btn::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      width: 12px;
      height: 12px;
      background: radial-gradient(circle, #ffd700 30%, #00d4ff 70%);
      border-radius: 50%;
      box-shadow: 
        0 0 15px #ffd700,
        0 0 25px #00d4ff;
      animation: arc-reactor-glow 2s ease-in-out infinite alternate;
    }

    @keyframes arc-reactor-glow {
      0% { 
        box-shadow: 0 0 15px #ffd700, 0 0 25px #00d4ff;
        transform: translateY(-50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 25px #ffd700, 0 0 35px #00d4ff;
        transform: translateY(-50%) scale(1.2);
      }
    }

    .create-btn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.3), transparent);
      transition: left 0.5s ease;
    }

    .create-btn:hover::after {
      left: 100%;
    }

    .create-btn:hover {
      color: #ffd700;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(60, 30, 0, 0.8) 100%);
      border-color: #ffd700;
      box-shadow: 
        0 0 40px rgba(255, 215, 0, 0.6),
        0 0 60px rgba(0, 212, 255, 0.3);
      transform: translateY(-3px);
    }

    /* Holographic Data Table */
    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: separate;
      border-spacing: 0;
      background: rgba(0, 0, 0, 0.8);
      border: 2px solid #00d4ff;
      border-radius: 10px;
      box-shadow: 
        0 0 50px rgba(0, 212, 255, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      position: relative;
      overflow: hidden;
    }

    table::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #00d4ff, #ffd700, #00d4ff, transparent);
      animation: data-stream 3s linear infinite;
    }

    @keyframes data-stream {
      0% { transform: translateX(-100%); }
      100% { transform: translateX(100%); }
    }

    th, td {
      padding: 20px 25px;
      text-align: center;
      border-bottom: 1px solid rgba(0, 212, 255, 0.2);
      position: relative;
    }

    th {
      background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 0, 0, 0.8));
      color: #fff;
      font-family: 'Orbitron', monospace;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-bottom: 2px solid #00d4ff;
      text-shadow: 0 0 10px #00d4ff;
    }

    th::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, #ffd700, transparent);
    }

    td {
      font-family: 'Exo 2', sans-serif;
      font-size: 16px;
      font-weight: 400;
      color: #00d4ff;
      background: rgba(0, 0, 0, 0.4);
    }

    tr:nth-child(even) td {
      background: rgba(0, 212, 255, 0.05);
    }

    tr:hover td {
      background: rgba(0, 212, 255, 0.1);
      color: #fff;
      text-shadow: 0 0 8px #00d4ff;
      transition: all 0.3s ease;
    }

    tr:hover {
      box-shadow: inset 0 0 20px rgba(0, 212, 255, 0.2);
    }

    /* JARVIS Action Buttons */
    a {
      text-decoration: none;
      padding: 12px 20px;
      font-family: 'Exo 2', sans-serif;
      font-weight: 600;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      border: 1px solid transparent;
      margin: 0 5px;
      display: inline-block;
      position: relative;
      overflow: hidden;
      border-radius: 25px;
    }

    a[href*="update"] {
      background: rgba(0, 212, 255, 0.1);
      color: #00d4ff;
      border-color: #00d4ff;
      box-shadow: 0 0 15px rgba(0, 212, 255, 0.3);
    }

    a[href*="update"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.3), transparent);
      transition: left 0.4s ease;
    }

    a[href*="update"]:hover::before {
      left: 100%;
    }

    a[href*="update"]:hover {
      background: rgba(0, 212, 255, 0.2);
      color: #fff;
      box-shadow: 
        0 0 25px rgba(0, 212, 255, 0.6),
        0 0 35px rgba(0, 212, 255, 0.3);
      transform: translateY(-2px);
    }

    a[href*="delete"] {
      background: rgba(255, 69, 0, 0.1);
      color: #ff4500;
      border-color: #ff4500;
      box-shadow: 0 0 15px rgba(255, 69, 0, 0.3);
    }

    a[href*="delete"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 69, 0, 0.3), transparent);
      transition: left 0.4s ease;
    }

    a[href*="delete"]:hover::before {
      left: 100%;
    }

    a[href*="delete"]:hover {
      background: rgba(255, 69, 0, 0.2);
      color: #fff;
      box-shadow: 
        0 0 25px rgba(255, 69, 0, 0.6),
        0 0 35px rgba(255, 69, 0, 0.3);
      transform: translateY(-2px);
    }

    /* Iron Man Arc Reactor HUD */
    .arc-reactor-hud {
      position: fixed;
      top: 20px;
      left: 20px;
      width: 120px;
      height: 120px;
      border: 2px solid #00d4ff;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.9) 0%, rgba(0, 212, 255, 0.1) 100%);
      box-shadow: 
        0 0 30px rgba(0, 212, 255, 0.4),
        inset 0 0 30px rgba(0, 212, 255, 0.2);
      z-index: 1000;
      pointer-events: none;
      animation: reactor-spin 10s linear infinite;
    }

    .arc-reactor-hud::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 40px;
      height: 40px;
      background: radial-gradient(circle, #ffd700 30%, #00d4ff 70%);
      border-radius: 50%;
      box-shadow: 
        0 0 20px #ffd700,
        0 0 40px #00d4ff;
      animation: core-pulse 2s ease-in-out infinite alternate;
    }

    .arc-reactor-hud::after {
      content: '';
      position: absolute;
      top: 10px;
      left: 10px;
      right: 10px;
      bottom: 10px;
      border: 1px solid rgba(0, 212, 255, 0.5);
      border-radius: 50%;
      background: repeating-conic-gradient(
        from 0deg,
        transparent 0deg,
        transparent 30deg,
        rgba(0, 212, 255, 0.3) 45deg,
        transparent 60deg
      );
    }

    @keyframes reactor-spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes core-pulse {
      0% { 
        box-shadow: 0 0 20px #ffd700, 0 0 40px #00d4ff;
        transform: translate(-50%, -50%) scale(1);
      }
      100% { 
        box-shadow: 0 0 30px #ffd700, 0 0 60px #00d4ff;
        transform: translate(-50%, -50%) scale(1.1);
      }
    }

    /* JARVIS Status Indicators */
    .status-bar {
      position: fixed;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 20px;
      z-index: 1000;
      pointer-events: none;
    }

    .status-indicator {
      padding: 8px 16px;
      background: rgba(0, 0, 0, 0.8);
      border: 1px solid #00d4ff;
      border-radius: 20px;
      color: #00d4ff;
      font-family: 'Exo 2', sans-serif;
      font-size: 12px;
      font-weight: 400;
      box-shadow: 0 0 15px rgba(0, 212, 255, 0.3);
    }

    .status-indicator::before {
      content: '●';
      margin-right: 8px;
      color: #00ff00;
      animation: status-blink 2s ease-in-out infinite;
    }

    @keyframes status-blink {
      0%, 50% { opacity: 1; }
      51%, 100% { opacity: 0.3; }
    }

    /* JARVIS Pagination */
    .pagination-container {
      width: 90%;
      margin: 40px auto;
      text-align: center;
    }

    .pagination-container ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-flex;
      gap: 10px;
    }

    .pagination-container li {
      display: inline;
    }

    .pagination-container a,
    .pagination-container strong {
      padding: 15px 20px;
      background: rgba(0, 0, 0, 0.8);
      color: #00d4ff;
      text-decoration: none;
      font-family: 'Exo 2', sans-serif;
      font-weight: 600;
      font-size: 14px;
      transition: all 0.3s ease;
      border: 1px solid #00d4ff;
      border-radius: 5px;
      box-shadow: 0 0 15px rgba(0, 212, 255, 0.3);
      position: relative;
      overflow: hidden;
    }

    .pagination-container a::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.3), transparent);
      transition: left 0.4s ease;
    }

    .pagination-container a:hover::before {
      left: 100%;
    }

    .pagination-container a:hover {
      background: rgba(0, 212, 255, 0.1);
      color: #fff;
      box-shadow: 
        0 0 25px rgba(0, 212, 255, 0.6),
        0 0 35px rgba(0, 212, 255, 0.3);
      transform: translateY(-2px);
    }

    .pagination-container strong {
      background: linear-gradient(135deg, #00d4ff, #0099cc);
      color: #000;
      box-shadow: 
        0 0 30px rgba(0, 212, 255, 0.6),
        0 0 40px rgba(0, 212, 255, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      h1 {
        font-size: 2.5rem;
        letter-spacing: 3px;
      }
      
      table, .btn-container, .pagination-container {
        width: 95%;
      }
      
      th, td {
        padding: 15px 12px;
        font-size: 14px;
      }
      
      a {
        padding: 10px 15px;
        font-size: 12px;
        margin: 2px;
      }

      .arc-reactor-hud {
        width: 80px;
        height: 80px;
        top: 10px;
        left: 10px;
      }

      .arc-reactor-hud::before {
        width: 25px;
        height: 25px;
      }

      .status-bar {
        flex-direction: column;
        gap: 10px;
        bottom: 10px;
      }
    }

    /* Floating Tech Elements */
    .floating-tech {
      position: fixed;
      pointer-events: none;
      z-index: -1;
    }

    .tech-1 {
      top: 15%;
      right: 10%;
      width: 100px;
      height: 100px;
      border: 1px solid rgba(0, 212, 255, 0.3);
      border-radius: 50%;
      animation: float-1 8s ease-in-out infinite;
    }

    .tech-2 {
      bottom: 20%;
      left: 8%;
      width: 150px;
      height: 80px;
      border: 1px solid rgba(255, 215, 0, 0.3);
      border-radius: 10px;
      animation: float-2 10s ease-in-out infinite;
    }

    .tech-3 {
      top: 50%;
      left: 5%;
      width: 60px;
      height: 60px;
      border: 1px solid rgba(0, 212, 255, 0.4);
      transform: rotate(45deg);
      animation: float-3 6s ease-in-out infinite;
    }

    @keyframes float-1 {
      0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.3; }
      50% { transform: translateY(-20px) rotate(180deg); opacity: 0.7; }
    }

    @keyframes float-2 {
      0%, 100% { transform: translateX(0) rotate(0deg); opacity: 0.4; }
      50% { transform: translateX(15px) rotate(10deg); opacity: 0.6; }
    }

    @keyframes float-3 {
      0%, 100% { transform: rotate(45deg) scale(1); opacity: 0.5; }
      50% { transform: rotate(225deg) scale(1.2); opacity: 0.8; }
    }
  </style>
</head>
<body>
  <!-- Arc Reactor HUD -->
  <div class="arc-reactor-hud"></div>

  <!-- Floating Tech Elements -->
  <div class="floating-tech tech-1"></div>
  <div class="floating-tech tech-2"></div>
  <div class="floating-tech tech-3"></div>

  <!-- JARVIS Status Bar -->
  <div class="status-bar">
    <div class="status-indicator">SYSTEM ONLINE</div>
    <div class="status-indicator">JARVIS ACTIVE</div>
    <div class="status-indicator">SECURE CONNECTION</div>
  </div>

  <h1>USER MANAGEMENT</h1>

  <!-- JARVIS Search Interface -->
  <div class="search-container">
    <form action="<?= site_url('/'); ?>" method="get">
      <?php
      $q = '';
      if(isset($_GET['q'])) {
          $q = $_GET['q'];
      }
      ?>
      <input type="text" name="q" placeholder="Search user database" value="<?= html_escape($q); ?>" id="searchBox">
      <button type="submit" class="search-btn">ANALYZE</button>
    </form>
  </div>

  <div class="btn-container">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">
      + CREATE NEW USER
    </a>
  </div>

  <table>
    <tr>
      <th>USER ID</th>
      <th>USERNAME</th>
      <th>EMAIL ADDRESS</th>
      <th>ACTIONS</th>
    </tr>

    <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $user['id']; ?></td>
        <td><?= $user['username']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
          <a href="<?= site_url('user/update/'.$user['id']); ?>">EDIT</a>
          <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Confirm user deletion from database?');">DELETE</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <!-- Pagination Interface -->
  <div class="pagination-container">
    <?php if (isset($page)) echo $page; ?>
  </div>
</body>
</html>