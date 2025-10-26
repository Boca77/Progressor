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
    
});