<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Gráficos sobre productos');
?>
<div class="row">
    <div class="col s12 m6">
        <canvas id="chart"></canvas>
    </div>
</div>
<script type="text/javascript" src="../../resources/js/chart.js"></script>
<?php
Dashboard::footerTemplate('ph.js');
?>