<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
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

        .container {
            max-width: 440px;
            width: 100%;
            background: linear-gradient(145deg, #111111, #0d0d0d);
            border: 2px solid #1a1a1a;
            border-radius: 4px;
            padding: 45px 40px;
            box-shadow: 
                0 0 60px rgba(255,69,0,0.15),
                inset 0 1px 0 rgba(255,255,255,0.05),
                0 20px 40px rgba(0,0,0,0.6);
            position: relative;
            z-index: 1;
            animation: slideUp 0.6s ease-out;
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

        .container::before {
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

        h2 {
            text-align: center;
            margin-bottom: 35px;
            color: #ffffff;
            font-size: 2.2rem;
            font-weight: 700;
            font-family: 'Rajdhani', sans-serif;
            letter-spacing: 3px;
            text-transform: uppercase;
            text-shadow: 0 0 20px rgba(255,69,0,0.4);
            position: relative;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, #ff4500, transparent);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
            color: #b0b0b0;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        input[type="text"], 
        input[type="password"], 
        input[type="email"], 
        select {
            width: 100%;
            padding: 14px 18px;
            border-radius: 2px;
            border: 1px solid #222;
            outline: none;
            background: #0a0a0a;
            color: #ffffff;
            font-size: 15px;
            font-weight: 600;
            box-shadow: inset 0 2px 6px rgba(0,0,0,0.8);
            transition: all 0.3s ease;
            font-family: 'Barlow', sans-serif;
        }

        input[type="text"]:focus, 
        input[type="password"]:focus, 
        input[type="email"]:focus, 
        select:focus {
            background: #0f0f0f;
            border-color: #ff4500;
            box-shadow: 
                inset 0 2px 6px rgba(0,0,0,0.8),
                0 0 0 1px #ff4500,
                0 0 20px rgba(255,69,0,0.2);
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L6 6L11 1' stroke='%23ff4500' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 18px center;
            padding-right: 45px;
        }

        select option {
            background: #0a0a0a;
            color: #ffffff;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 11px;
            color: #ff4500;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            user-select: none;
            transition: color 0.2s ease;
        }

        .toggle-password:hover {
            color: #ff6a33;
        }

        button {
            margin-top: 30px;
            padding: 16px;
            width: 100%;
            border-radius: 2px;
            border: none;
            background: linear-gradient(135deg, #ff4500 0%, #8b0000 100%);
            color: white;
            font-weight: 700;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            box-shadow: 
                0 8px 20px rgba(255,69,0,0.3),
                inset 0 1px 0 rgba(255,255,255,0.1);
            transition: all 0.3s ease;
            font-family: 'Rajdhani', sans-serif;
            position: relative;
            overflow: hidden;
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }

        button:hover::before {
            left: 100%;
        }

        button:hover {
            background: linear-gradient(135deg, #ff5a1f 0%, #a00000 100%);
            box-shadow: 
                0 10px 30px rgba(255,69,0,0.4),
                inset 0 1px 0 rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
            box-shadow: 
                0 4px 12px rgba(255,69,0,0.3),
                inset 0 1px 0 rgba(255,255,255,0.1);
        }

        .footer-text {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
            font-weight: 600;
        }

        .footer-text a {
            color: #ff4500;
            font-weight: 700;
            text-decoration: none;
            transition: color 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer-text a:hover {
            color: #ff6a33;
        }

        .error {
            background: rgba(139,0,0,0.2);
            border-left: 3px solid #8b0000;
            color: #ff6b6b;
            padding: 12px 16px;
            margin-bottom: 25px;
            border-radius: 2px;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        
        <div class="error" id="errorMsg" style="display: none;">
            Error message will appear here
        </div>

        <form method="post" action="#" onsubmit="return handleSubmit(event)">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="username" />
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required autocomplete="email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" required autocomplete="new-password" />
                    <span class="toggle-password" onclick="togglePassword()">Show</span>
                </div>
            </div>

            <div class="form-group">
                <label for="role">Account Type</label>
                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>

            <button type="submit">Create Account</button>
        </form>
        
        <p class="footer-text">Already have an account? <a href="<?= site_url('login') ?>">Login</a></p>
    </div>

    <script>
        function togglePassword() {
            const pwd = document.getElementById('password');
            const toggle = document.querySelector('.toggle-password');
            
            if (pwd.type === 'password') {
                pwd.type = 'text';
                toggle.textContent = 'Hide';
            } else {
                pwd.type = 'password';
                toggle.textContent = 'Show';
            }
        }

        function handleSubmit(event) {
            event.preventDefault();
            // Add your form submission logic here
            console.log('Form submitted');
            return false;
        }
    </script>
</body>
</html>