@extends('layout.main')

@section('title', 'Progressor')

@section('content')
<div class="login-signup">
    <div class="bg-decoration circle-1"></div>
    <div class="bg-decoration circle-2"></div>
    
    <div class="dots-grid">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <div class="container">
        <div class="corner-accent corner-top-left"></div>
        <div class="corner-accent corner-bottom-right"></div>

        <div class="tab-container">
            <button class="tab active" data-tab="login">LOGIN</button>
            <button class="tab" data-tab="signup">SIGN UP</button>
            <div class="tab-indicator" id="tabIndicator"></div>
        </div>

        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="YourEmail@email.com" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" required>
            </div>

            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="continue-btn">CONTINUE</button>

            <div class="signup-link">
                Don't have an account? <a href="#" id="signupToggle">Sign Up</a>
            </div>
        </form>

        <form id="signupForm" class="hidden">
            <div class="form-group">
                <label for="signup-name">Full Name</label>
                <input type="text" id="signup-name" placeholder="Your Name" required>
            </div>

            <div class="form-group">
                <label for="signup-email">Email</label>
                <input type="email" id="signup-email" placeholder="YourEmail@email.com" required>
            </div>

            <div class="form-group">
                <label for="signup-password">Password</label>
                <input type="password" id="signup-password" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label for="signup-confirm">Confirm Password</label>
                <input type="password" id="signup-confirm" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="continue-btn">CREATE ACCOUNT</button>

            <div class="signup-link">
                Already have an account? <a href="#" id="loginToggle">Login</a>
            </div>
        </form>
    </div>

 <script>
        const tabs = document.querySelectorAll('.tab');
        const tabIndicator = document.getElementById('tabIndicator');
        const loginForm = document.getElementById('loginForm');
        const signupForm = document.getElementById('signupForm');
        const signupToggle = document.getElementById('signupToggle');
        const loginToggle = document.getElementById('loginToggle');

        function updateTabIndicator(tab) {
            const rect = tab.getBoundingClientRect();
            const container = tab.parentElement.getBoundingClientRect();
            tabIndicator.style.width = rect.width + 'px';
            tabIndicator.style.left = (rect.left - container.left) + 'px';
        }

        function switchTab(tabName) {
            tabs.forEach(t => t.classList.remove('active'));
            const activeTab = document.querySelector(`[data-tab="${tabName}"]`);
            activeTab.classList.add('active');
            updateTabIndicator(activeTab);

            if (tabName === 'login') {
                loginForm.classList.remove('hidden');
                signupForm.classList.add('hidden');
            } else {
                signupForm.classList.remove('hidden');
                loginForm.classList.add('hidden');
            }
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                switchTab(tab.dataset.tab);
            });
        });

        signupToggle.addEventListener('click', (e) => {
            e.preventDefault();
            switchTab('signup');
        });

        loginToggle.addEventListener('click', (e) => {
            e.preventDefault();
            switchTab('login');
        });

        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Login functionality would be implemented here!');
        });

        signupForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const password = document.getElementById('signup-password').value;
            const confirm = document.getElementById('signup-confirm').value;
            
            if (password !== confirm) {
                alert('Passwords do not match!');
                return;
            }
            
            alert('Signup functionality would be implemented here!');
        });

        // Initialize tab indicator
        updateTabIndicator(document.querySelector('.tab.active'));

        // Update indicator on window resize
        window.addEventListener('resize', () => {
            updateTabIndicator(document.querySelector('.tab.active'));
        });
    </script>
</div>
@endsection


