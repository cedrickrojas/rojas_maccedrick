<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>View</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
      min-height: 100vh;
      padding: 40px 20px;
      color: #f3f4f6;
      position: relative;
      overflow-x: hidden;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        linear-gradient(135deg, rgba(255,69,0,0.03) 0%, transparent 50%),
        radial-gradient(circle at 20% 80%, rgba(255,69,0,0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(139,0,0,0.06) 0%, transparent 50%);
      pointer-events: none;
      z-index: 0;
    }

    .content-wrapper {
      position: relative;
      z-index: 1;
    }

    h1 {
      text-align: center;
      margin-bottom: 50px;
      color: #ffffff;
      font-size: 2.8rem;
      font-weight: 700;
      font-family: 'Rajdhani', sans-serif;
      letter-spacing: 4px;
      text-transform: uppercase;
      text-shadow: 0 0 30px rgba(255,69,0,0.5);
      position: relative;
      animation: titleFade 0.8s ease-out;
    }

    @keyframes titleFade {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 3px;
      background: linear-gradient(90deg, transparent, #ff4500, transparent);
    }

    .search-container {
      display: flex;
      justify-content: center;
      margin-bottom: 35px;
      animation: fadeInUp 0.6s ease-out 0.2s both;
    }

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

    .search-container form {
      display: flex;
      width: 100%;
      max-width: 450px;
      background: linear-gradient(145deg, #111111, #0d0d0d);
      border: 1px solid #222;
      border-radius: 2px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0,0,0,0.5);
    }

    .search-container input[type="text"] {
      padding: 14px 20px;
      border: none;
      outline: none;
      flex: 1;
      background: transparent;
      color: #f3f4f6;
      font-size: 15px;
      font-weight: 600;
      font-family: 'Barlow', sans-serif;
    }

    .search-container input[type="text"]::placeholder {
      color: #666;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-size: 12px;
    }

    .search-container .search-btn {
      padding: 14px 28px;
      border: none;
      cursor: pointer;
      background: linear-gradient(135deg, #ff4500, #8b0000);
      color: white;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      font-size: 13px;
      transition: all 0.3s ease;
      font-family: 'Rajdhani', sans-serif;
    }

    .search-container .search-btn:hover {
      background: linear-gradient(135deg, #ff5a1f, #a00000);
      box-shadow: 0 4px 16px rgba(255,69,0,0.4);
    }

    .btn-container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto 30px auto;
      text-align: right;
      animation: fadeInUp 0.6s ease-out 0.3s both;
    }

    .create-btn {
      background: linear-gradient(135deg, #ff4500, #8b0000);
      color: white;
      padding: 12px 26px;
      text-decoration: none;
      border-radius: 2px;
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      box-shadow: 0 6px 18px rgba(255,69,0,0.3);
      transition: all 0.3s ease;
      display: inline-block;
      font-family: 'Rajdhani', sans-serif;
      border: 1px solid #ff4500;
    }

    .create-btn:hover {
      transform: translateY(-2px);
      background: linear-gradient(135deg, #ff5a1f, #a00000);
      box-shadow: 0 8px 24px rgba(255,69,0,0.5);
    }

    .logout-btn {
      background: linear-gradient(135deg, #8b0000, #5a0000);
      border: 1px solid #8b0000;
    }

    .logout-btn:hover {
      background: linear-gradient(135deg, #a00000, #6a0000);
      box-shadow: 0 8px 24px rgba(139,0,0,0.5);
    }

    .table-wrapper {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
      animation: fadeInUp 0.6s ease-out 0.4s both;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 2px;
      overflow: hidden;
      background: linear-gradient(145deg, #111111, #0d0d0d);
      border: 2px solid #1a1a1a;
      box-shadow: 0 12px 40px rgba(0,0,0,0.6);
    }

    table::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, transparent, #ff4500, transparent);
    }

    th, td {
      padding: 18px 24px;
      text-align: center;
      border-bottom: 1px solid #1a1a1a;
    }

    th {
      background: #0a0a0a;
      color: #b0b0b0;
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-family: 'Rajdhani', sans-serif;
      border-bottom: 2px solid #ff4500;
    }

    tbody tr {
      transition: all 0.3s ease;
      animation: tableRowFade 0.4s ease-out both;
    }

    @keyframes tableRowFade {
      from {
        opacity: 0;
        transform: translateX(-10px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    tbody tr:nth-child(1) { animation-delay: 0.5s; }
    tbody tr:nth-child(2) { animation-delay: 0.55s; }
    tbody tr:nth-child(3) { animation-delay: 0.6s; }
    tbody tr:nth-child(4) { animation-delay: 0.65s; }
    tbody tr:nth-child(5) { animation-delay: 0.7s; }
    tbody tr:nth-child(n+6) { animation-delay: 0.75s; }

    tbody tr:nth-child(even) {
      background: rgba(15, 15, 15, 0.5);
    }

    tbody tr:nth-child(odd) {
      background: rgba(10, 10, 10, 0.5);
    }

    tbody tr:hover {
      background: rgba(255, 69, 0, 0.1);
      transform: scale(1.01);
      box-shadow: 0 4px 20px rgba(255,69,0,0.2);
    }

    td {
      color: #e5e5e5;
      font-weight: 600;
      font-size: 14px;
    }

    .action-links a {
      text-decoration: none;
      padding: 8px 18px;
      border-radius: 2px;
      font-weight: 700;
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      display: inline-block;
      margin: 0 4px;
      font-family: 'Rajdhani', sans-serif;
    }

    .action-links a[href*="update"] {
      background: linear-gradient(135deg, #ff4500, #ff6a33);
      color: white;
      border: 1px solid #ff4500;
      box-shadow: 0 3px 10px rgba(255,69,0,0.3);
    }

    .action-links a[href*="update"]:hover {
      background: linear-gradient(135deg, #ff5a1f, #ff7a43);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255,69,0,0.5);
    }

    .action-links a[href*="delete"] {
      background: linear-gradient(135deg, #8b0000, #5a0000);
      color: white;
      border: 1px solid #8b0000;
      box-shadow: 0 3px 10px rgba(139,0,0,0.3);
    }

    .action-links a[href*="delete"]:hover {
      background: linear-gradient(135deg, #a00000, #6a0000);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(139,0,0,0.5);
    }

    .pagination-container {
      width: 90%;
      max-width: 1200px;
      margin: 40px auto;
      text-align: center;
      animation: fadeInUp 0.6s ease-out 0.8s both;
    }

    .pagination-container ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: inline-flex;
      gap: 8px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .pagination-container li {
      display: inline;
    }

    .pagination-container a,
    .pagination-container strong {
      padding: 10px 18px;
      border-radius: 2px;
      background: linear-gradient(145deg, #111111, #0d0d0d);
      border: 1px solid #222;
      color: #b0b0b0;
      text-decoration: none;
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      box-shadow: 0 3px 12px rgba(0,0,0,0.5);
      font-family: 'Rajdhani', sans-serif;
      display: inline-block;
    }

    .pagination-container a:hover {
      background: linear-gradient(135deg, #ff4500, #8b0000);
      border-color: #ff4500;
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 5px 18px rgba(255,69,0,0.4);
    }

    .pagination-container strong {
      background: linear-gradient(135deg, #ff4500, #8b0000);
      border-color: #ff4500;
      color: white;
      box-shadow: 0 4px 16px rgba(255,69,0,0.5);
    }

    .pagination-container a:focus,
    .pagination-container strong:focus {
      outline: none;
      box-shadow: 0 0 0 2px #ff4500;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 2rem;
        letter-spacing: 2px;
      }

      .table-wrapper {
        width: 95%;
        overflow-x: auto;
      }

      table {
        font-size: 12px;
      }

      th, td {
        padding: 12px 16px;
      }

      .btn-container {
        width: 95%;
        text-align: center;
      }

      .create-btn {
        margin: 5px !important;
        display: inline-block;
      }
    }
  </style>
</head>
<body>
  <div class="content-wrapper">
    <h1>User Management</h1>

    <!-- Server-side search form -->
    <div class="search-container">
      <form action="<?= site_url('/user/view'); ?>" method="get">
        <?php
        $q = '';
        if(isset($_GET['q'])) {
            $q = $_GET['q'];
        }
        ?>
        <input type="text" name="q" placeholder="Search records..." value="<?= html_escape($q); ?>" id="searchBox">
        <button type="submit" class="search-btn">Search</button>
      </form>
    </div>

    <?php $current_role = $current_role ?? 'user'; ?>
    <div class="btn-container">
      <?php if ($current_role === 'admin'): ?>
      <a href="<?= site_url('user/create'); ?>" class="create-btn">
        + Create New User
      </a>
      <?php endif; ?>
      <?php if ($current_role !== 'guest'): ?>
      <a href="<?= site_url('logout'); ?>" class="create-btn logout-btn" style="margin-left: 10px;">
        Logout
      </a>
      <?php endif; ?>
    </div>

    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <?php if ($current_role === 'admin'): ?>
            <th>Action</th>
            <?php endif; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?= $user['id']; ?></td>
              <td><?= $user['username']; ?></td>
              <td><?= $user['email']; ?></td>
              <?php if ($current_role === 'admin'): ?>
              <td class="action-links">
                <a href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a>
                <a href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              </td>
              <?php endif; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination links -->
    <div class="pagination-container">
      <?php if (isset($page)) echo $page; ?>
    </div>
  </div>
</body>
</html>