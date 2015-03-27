<!doctype html>
<?php
    //Step 1: Register KoolChart component to your page
    require "KoolControls/KoolChart/koolchart.php";
 
    //Step 2: Create chart object.
    $chart = new KoolChart("chart");
    
    //Step 3: Set properties for chart: title, legend, axis
    $chart->Title->Text = "Sale report for 2012";
    $chart->PlotArea->XAxis->Title = "Quarter";
    $chart->PlotArea->XAxis->Set(array("Q1","Q2","Q3","Q4","Q5"));
    $chart->PlotArea->YAxis->Title = "Sales";
    $chart->PlotArea->YAxis->LabelsAppearance->DataFormatString = "$ {0}";
    
    //Step 4: Adding series
    $chart->PlotArea->AddSeries(new ColumnSeries("Computer",array(20,30,40,70,50)));
    $chart->PlotArea->AddSeries(new ColumnSeries("Laptop",array(40,50,10,30,60)));
?>


<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
</body>
</html>