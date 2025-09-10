<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=375, user-scalable=no">
  <title>Doython Api Key Platform</title>
  <link href="https://cdn.fontcdn.ir/Font/Persian/Yekan/Yekan.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Yekan', sans-serif;
    }
    body {
      width: 375px;
      height: 667px;
      overflow: hidden;
      background: white;
      position: relative;
    }
    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px;
      padding: 32px 24px;
    }
    .title {
      font-size: 24px;
      font-weight: 300;
      text-align: center;
      margin-bottom: 8px;
      color: #1a1a1a;
      letter-spacing: -0.5px;
    }
    .region-note {
      font-size: 13px;
      color: #666;
      text-align: center;
      margin-bottom: 32px;
      font-weight: 300;
    }
    input {
      width: 100%;
      padding: 16px 12px;
      margin-bottom: 16px;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 300;
      background-color: #fafafa;
      transition: all 0.2s ease;
    }
    input:focus {
      outline: none;
      border-color: #007AFF;
      background-color: white;
    }
    .login-btn {
      width: 100%;
      padding: 16px;
      background-color: #1a1a1a;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 400;
      margin-bottom: 24px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .login-btn:hover {
      background-color: #333;
    }
    .divider {
      text-align: center;
      font-size: 12px;
      color: #999;
      margin: 24px 0;
      position: relative;
    }
    .divider::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background-color: #e0e0e0;
      z-index: 1;
    }
    .divider span {
      background-color: rgba(255, 255, 255, 0.98);
      padding: 0 16px;
      position: relative;
      z-index: 2;
    }
    .google-btn {
      width: 100%;
      padding: 16px;
      background-color: white;
      color: #333;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      font-size: 15px;
      font-weight: 400;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 12px;
      margin-bottom: 24px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .google-btn:hover {
      background-color: #f8f8f8;
      border-color: #ccc;
    }
    .google-icon {
      width: 18px;
      height: 18px;
      background: url('https://images.icon-icons.com/800/PNG/512/_google_icon-icons.com_65791.png') no-repeat center;
      background-size: contain;
    }
    .links {
      text-align: center;
      font-size: 14px;
      margin-bottom: 24px;
    }
    .links a {
      color: #007AFF;
      text-decoration: none;
      font-weight: 400;
    }
    .consent {
      font-size: 12px;
      color: #888;
      text-align: center;
      line-height: 1.4;
      font-weight: 300;
    }
    .consent a {
      color: #007AFF;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="title">Doython Platform</div>
    <div class="region-note">
      Only login via email or Google is supported in your region.
    </div>
    <input type="email" placeholder="Email address">
    <input type="password" placeholder="Password">
    <button class="login-btn">Log in</button>
    <div class="links">
      <a href="../register">Sign up</a>
    </div>
    <div class="divider"><span>OR</span></div>
    <button class="google-btn">
      <div class="google-icon"></div>
      Log in with Google
    </button>
    <div class="consent">
      By signing up or logging in, you consent to DeepSeek's 
      <a href="#">Terms of Service</a> and 
      <a href="#">Privacy Policy</a>.
    </div>
  </div>
  <script>
    document.querySelector('.login-btn').addEventListener('click', function() {
      const email = document.querySelector('input[type="email"]').value;
      const password = document.querySelector('input[type="password"]').value;
      if (email && password) {
        alert('Login functionality would connect to your backend here');
      } else {
        alert('Please enter both email and password');
      }
    });
    document.querySelector('.google-btn').addEventListener('click', function() {
      alert('Google OAuth would be implemented here');
    });
  </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.CF$cv$params={r:'97bdd2ef95de5cc8',t:'MTc1NzMyNzk4Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>

