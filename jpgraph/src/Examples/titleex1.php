<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

// Some data
//$ydata = array(11,3,8,12,5,1,9,13,5,7);

$ydata = array(0.000,2.0068,4.0136,6.0136,6.0204,8.0272,10.0340,20.0680,30.1020);

// Create the graph. These two calls are always required
$graph = new Graph(400,300);
$graph->SetScale("linlin"); //linint
//$graph->SetScale("linlin",0,0.5,0,30.5);
$graph->SetMargin(25,10,30,30);

$graph->title->SetFont(FF_ARIAL,FS_BOLD,12);
$graph->title->Set('The Title');
$graph->subtitle->SetFont(FF_ARIAL,FS_BOLD,10);
$graph->subtitle->Set('The Subtitle');
$graph->subsubtitle->SetFont(FF_ARIAL,FS_ITALIC,9);
$graph->subsubtitle->Set('The Subsubitle');

// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor("blue");

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
$graph->Stroke();
?>
