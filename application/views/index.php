<body>
<?php
 
$dataPoints = array( 
	array("label"=>"Institusi", "y"=>67.7),
    array("label"=>"Alumni", "y"=>27.4),
	array("label"=>"Civitas", "y"=>2.9),
	array("label"=>"Masyarakat", "y"=>2)
)
 
?>

<script>
window.onload = function() {
 
 
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Endowment Fund Update"
        },
        subtitles: [{
            text: "Mei 2019"
        }],
        data: [{
            type: "pie",
            yValueFormatString: "#,##0.00\"%\"",
            indexLabel: "{label} ({y})",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();
    
}
</script>
<div id="chartContainer" style="height: 480px; width: 100%; margin-top: 100px; display: block;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<center>
    <a href="<?php echo site_url('endowment/step1'); ?>" class="btn btn-primary mt-4">Add Endowment</a>
</center>
</body>