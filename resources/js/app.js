import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;
// @ts-ignore
$(function($) {
    
    $.ajax({
        url: '/api/categories',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            data.results.forEach(cat => {
                $('.categories-container').append(`
                    <div class="category px-4 py-3">
                        ${cat.name}    
                    </div>
                `);
            });
        }
    })






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
    
});