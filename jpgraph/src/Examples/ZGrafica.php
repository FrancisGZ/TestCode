
<?php
 
// content="text/plain; charset=utf-8"
require_once ('../jpgraph.php');
require_once ('../jpgraph_line.php');
require_once ('../jpgraph_scatter.php');
 
$xdata2 = array(0.100,0.200,0.300,0.400,0.500);
$ydata2 = array(0.1485,0.1763,0.1991,0.2184,0.2512);
 
 
//$xdata2 = array(0.500, 1.000, 1.500, 2.000, 2.500, 3.000);
//$ydata2 = array(0.0491, 0.0962, 0.1390, 0.1854, 0.2266, 0.2637);
 
 
$graph = new Graph(500, 200);
$graph->SetScale('linlin');
$graph->SetScale("linlin");
 
$graph->SetMargin(60, 20, 20, 60);
 
$graph->title->Set("Curva de calibracion");
$graph->title->SetFont(FF_FONT1, FS_BOLD);
 
$graph->xaxis->title->Set("Concetracion (mg/L)");
$graph->xaxis->title->SetFont(FF_FONT1, FS_BOLD);
$graph->yaxis->title->Set("Absorbancia");
$graph->yaxis->title->SetFont(FF_FONT1, FS_BOLD);
 
$graph->yaxis->SetTitleMargin(35);
 
$lineplot = new LinePlot($ydata2, $xdata2);
$lineplot->mark->SetType(MARK_FILLEDCIRCLE);
$lineplot->mark->SetFillColor("blue");
$lineplot->mark->SetWidth(0);
$lineplot->SetColor('blue');
$graph->Add($lineplot);

$xdatay = array(0.100,0.200,0.300,0.400,0.500);
$ydatax = array(0.1485,0.1763,0.1991,0.2184,0.2512);
$sp1 = new ScatterPlot($xdatay,$ydatax);
 
$graph->Add($sp1);
// Add the plot to the grap
 
// Display the graph
$graph->Stroke();
?>
 