<?php $ua = $_SERVER['HTTP_USER_AGENT']; ?>
<!-- Typekit Web Font -->
<script src="//use.typekit.net/tsa8tqd.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- SVG Support -->
<?php if (strstr($ua, 'Trident') || strstr($ua, 'MSIE')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg4everybody/2.1.9/svg4everybody.min.js"></script>
<script>svg4everybody();</script>
<?php endif ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWs4K6dwj2McZUJr0fo0SOa0dGf3FnFKM" async defer></script>
<script src="/assets/js/common.js" async defer></script>
</body>
</html>
