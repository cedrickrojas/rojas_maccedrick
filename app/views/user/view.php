<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>View</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
      padding: 25px;
      color: #e5e5e5;
      min-height: 100vh;
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

    h1 {
      text-align: center;
      margin-bottom: 50px;
      color: #ff6b35;
      font-family: 'Orbitron', monospace;
      font-size: 2.8rem;
      font-weight: 900;
      letter-spacing: 3px;
      text-transform: uppercase;
      text-shadow: 
        0 0 10px rgba(255, 107, 53, 0.5),
        0 0 20px rgba(255, 107, 53, 0.3),
        0 0 40px rgba(255, 107, 53, 0.1);
      position: relative;
    }

    h1::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 200px;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    .search-container {
      display: flex;
      justify-content: center;
      margin-bottom: 35px;
    }

    .search-container form {
      display: flex;
      width: 100%;
      max-width: 450px;
      background: #1a1a1a;
      border: 2px solid #333;
      border-radius: 0;
      overflow: hidden;
      box-shadow: 
        0 8px 20px rgba(0,0,0,0.6),
        inset 0 1px 0 rgba(255,255,255,0.1);
      position: relative;
    }

    .search-container form::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    .search-container input[type="text"] {
      padding: 16px 20px;
      border: none;
      outline: none;
      flex: 1;
      background: transparent;
      color: #e5e5e5;
      font-family: 'Rajdhani', sans-serif;
      font-size: 16px;
      font-weight: 500;
    }

    .search-container input[type="text"]::placeholder {
      color: #777;
      font-weight: 400;
    }

    .search-container .search-btn {
      padding: 16px 28px;
      border: none;
      cursor: pointer;
      background: linear-gradient(135deg, #ff6b35, #e55a2b);
      color: #fff;
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      font-size: 15px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      position: relative;
      border-left: 2px solid #333;
    }

    .search-container .search-btn:hover {
      background: linear-gradient(135deg, #e55a2b, #d14d20);
      box-shadow: 0 0 20px rgba(255, 107, 53, 0.4);
    }

    .search-container .search-btn:active {
      transform: translateY(1px);
    }

    .btn-container {
      width: 90%;
      margin: 0 auto 40px auto;
      text-align: right;
    }

    .create-btn {
      background: linear-gradient(135deg, #333, #1a1a1a);
      color: #ff6b35;
      padding: 14px 32px;
      text-decoration: none;
      border: 2px solid #ff6b35;
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      font-size: 16px;
      text-transform: uppercase;
      letter-spacing: 2px;
      box-shadow: 
        0 8px 20px rgba(0,0,0,0.4),
        inset 0 1px 0 rgba(255,255,255,0.1);
      transition: all 0.3s ease;
      display: inline-block;
      position: relative;
      overflow: hidden;
    }

    .create-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,107,53,0.2), transparent);
      transition: left 0.5s ease;
    }

    .create-btn:hover::before {
      left: 100%;
    }

    .create-btn:hover {
      color: #fff;
      background: linear-gradient(135deg, #ff6b35, #e55a2b);
      border-color: #fff;
      transform: translateY(-2px);
      box-shadow: 
        0 12px 25px rgba(0,0,0,0.5),
        0 0 30px rgba(255, 107, 53, 0.3);
    }

    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: separate;
      border-spacing: 0;
      background: #1a1a1a;
      border: 2px solid #333;
      box-shadow: 
        0px 15px 35px rgba(0,0,0,0.7),
        inset 0 1px 0 rgba(255,255,255,0.05);
      position: relative;
    }

    table::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff6b35, transparent);
    }

    th, td {
      padding: 18px 25px;
      text-align: center;
      border-bottom: 1px solid #2a2a2a;
    }

    th {
      background: linear-gradient(135deg, #0a0a0a, #1a1a1a);
      color: #ff6b35;
      font-family: 'Orbitron', monospace;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      border-bottom: 2px solid #ff6b35;
      position: relative;
    }

    td {
      font-family: 'Rajdhani', sans-serif;
      font-size: 16px;
      font-weight: 500;
      color: #ccc;
    }

    tr:nth-child(even) {
      background: rgba(26, 26, 26, 0.8);
    }

    tr:nth-child(odd) {
      background: rgba(16, 16, 16, 0.6);
    }

    tr:hover {
      background: linear-gradient(90deg, rgba(255, 107, 53, 0.1), rgba(255, 107, 53, 0.2), rgba(255, 107, 53, 0.1));
      transition: all 0.3s ease;
    }

    tr:hover td {
      color: #fff;
    }

    a {
      text-decoration: none;
      padding: 10px 18px;
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      border: 1px solid transparent;
      margin: 0 4px;
      display: inline-block;
      position: relative;
      overflow: hidden;
    }

    a[href*="update"] {
      background: linear-gradient(135deg, #333, #1a1a1a);
      color: #4ade80;
      border-color: #4ade80;
    }

    a[href*="update"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(74,222,128,0.2), transparent);
      transition: left 0.5s ease;
    }

    a[href*="update"]:hover::before {
      left: 100%;
    }

    a[href*="update"]:hover {
      background: linear-gradient(135deg, #4ade80, #22c55e);
      color: #000;
      border-color: #fff;
      box-shadow: 0 0 20px rgba(74, 222, 128, 0.4);
    }

    a[href*="delete"] {
      background: linear-gradient(135deg, #333, #1a1a1a);
      color: #f87171;
      border-color: #f87171;
    }

    a[href*="delete"]::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(248,113,113,0.2), transparent);
      transition: left 0.5s ease;
    }

    a[href*="delete"]:hover::before {
      left: 100%;
    }

    a[href*="delete"]:hover {
      background: linear-gradient(135deg, #f87171, #ef4444);
      color: #fff;
      border-color: #fff;
      box-shadow: 0 0 20px rgba(248, 113, 113, 0.4);
    }

    /* Pagination masculine styling */
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
      gap: 8px;
    }

    .pagination-container li {
      display: inline;
    }

    .pagination-container a,
    .pagination-container strong {
      padding: 12px 18px;
      background: linear-gradient(135deg, #333, #1a1a1a);
      color: #ccc;
      text-decoration: none;
      font-family: 'Rajdhani', sans-serif;
      font-weight: 700;
      font-size: 15px;
      transition: all 0.3s ease;
      border: 1px solid #444;
      box-shadow: 
        0 4px 12px rgba(0,0,0,0.5),
        inset 0 1px 0 rgba(255,255,255,0.1);
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
      background: linear-gradient(90deg, transparent, rgba(255,107,53,0.2), transparent);
      transition: left 0.5s ease;
    }

    .pagination-container a:hover::before {
      left: 100%;
    }

    .pagination-container a:hover {
      background: linear-gradient(135deg, #ff6b35, #e55a2b);
      color: #fff;
      border-color: #fff;
      transform: translateY(-2px);
      box-shadow: 
        0 6px 16px rgba(0,0,0,0.6),
        0 0 20px rgba(255, 107, 53, 0.3);
    }

    .pagination-container strong {
      background: linear-gradient(135deg, #ff6b35, #e55a2b);
      color: #fff;
      border-color: #fff;
      box-shadow: 
        0 4px 12px rgba(0,0,0,0.5),
        0 0 25px rgba(255, 107, 53, 0.4);
    }

    .pagination-container a:focus,
    .pagination-container strong:focus {
      outline: none;
      box-shadow: 
        0 0 0 2px #ff6b35,
        0 4px 12px rgba(0,0,0,0.5);
    }

    /* Additional masculine touches */
    @keyframes subtle-pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.8; }
    }

    .create-btn {
      animation: subtle-pulse 3s ease-in-out infinite;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      h1 {
        font-size: 2.2rem;
        letter-spacing: 2px;
      }
      
      table, .btn-container, .pagination-container {
        width: 95%;
      }
      
      th, td {
        padding: 12px 15px;
        font-size: 14px;
      }
      
      a {
        padding: 8px 12px;
        font-size: 12px;
        margin: 2px;
      }
    }
  </style>
</head>
<body>
  <h1>USER MANAGEMENT</h1>

  <!-- Server-side search form -->
  <div class="search-container">
    <form action="<?= site_url('/'); ?>" method="get">
      <?php
      $q = '';
      if(isset($_GET['q'])) {
          $q = $_GET['q'];
      }
      ?>
      <input type="text" name="q" placeholder="SEARCH RECORDS..." value="<?= html_escape($q); ?>" id="searchBox">
      <button type="submit" class="search-btn">SEARCH</button>
    </form>
  </div>

  <div class="btn-container">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">
      + CREATE NEW USER
    </a>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>USERNAME</th>
      <th>EMAIL</th>
      <th>ACTIONS</th>
    </tr>

    <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $user['id']; ?></td>
        <td><?= $user['username']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
          <a href="<?= site_url('user/update/'.$user['id']); ?>">EDIT</a>
          <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">DELETE</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

  <!-- Pagination links -->
  <div class="pagination-container">
    <?php if (isset($page)) echo $page; ?>
  </div>
</body>
</html>