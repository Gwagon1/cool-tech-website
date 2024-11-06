@if(!session('cookie_accepted'))
<div id="cookie-notice" style="background-color: #f8d7da; padding: 10px; text-align: center;">
    <p>This website uses cookies to enhance the user experience. 
        <button id="accept-cookies">Accept</button>
    </p>
</div>

<script>
document.getElementById('accept-cookies').onclick = function() {
    document.getElementById('cookie-notice').style.display = 'none';
    fetch('/accept-cookies', { method: 'POST' });
};
</script>
@endif
