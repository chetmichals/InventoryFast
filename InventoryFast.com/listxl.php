 <?php
  header( "content-type: text/xml" );
  // Install the DB module using 'pear install DB'
  require_once( "./include/DatabaseAbstractionLayer.php" );
  
  $data = array();
  
  $db =& DB::connect("mysql://root@localhost/names", array());
  if (PEAR::isError($db)) { die($db->getMessage()); }
  
  $res = $db->query( "SELECT * FROM names ORDER BY last" );
  
  $rows = array();
  while( $res->fetchInto( $row, DB_FETCHMODE_ASSOC ) ) 
  { $rows []= $row; }
  print "<?xml version=\"1.0\"?>\n";
  print "<?mso-application progid=\"Excel.Sheet\"?>\n";
  ?>
  <Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
  xmlns:o="urn:schemas-microsoft-com:office:office"
  xmlns:x="urn:schemas-microsoft-com:office:excel"
  xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
  xmlns:html="http://www.w3.org/TR/REC-html40">
  <DocumentProperties 
     xmlns="urn:schemas-microsoft-com:office:office">
 <Author>Jack Herrington</Author>
  <LastAuthor>Jack Herrington</LastAuthor>
  <Created>2005-08-02T04:06:26Z</Created>
  <LastSaved>2005-08-02T04:30:11Z</LastSaved>
  <Company>My Company, Inc.</Company>
  <Version>11.6360</Version>
  </DocumentProperties>
  <ExcelWorkbook 
     xmlns="urn:schemas-microsoft-com:office:excel">
  <WindowHeight>8535</WindowHeight>
  <WindowWidth>12345</WindowWidth>
  <WindowTopX>480</WindowTopX>
  <WindowTopY>90</WindowTopY>
  <ProtectStructure>False</ProtectStructure>
  <ProtectWindows>False</ProtectWindows>
  </ExcelWorkbook>
  <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
  <Alignment ss:Vertical="Bottom"/>
  <Borders/>
  <Font/>
  <Interior/>
  <NumberFormat/>
  <Protection/>
  </Style>
  <Style ss:ID="s21" ss:Name="Hyperlink">
  <Font ss:Color="#0000FF" ss:Underline="Single"/>
  </Style>
  <Style ss:ID="s23">
  <Font x:Family="Swiss" ss:Bold="1"/>
  </Style>
  </Styles>
  <Worksheet ss:Name="Names">
  <Table ss:ExpandedColumnCount="4"
  ss:ExpandedRowCount="<?php echo( count( $rows ) + 1 ); ?>"
  x:FullColumns="1" x:FullRows="1">
  <Column ss:Index="4" ss:AutoFitWidth="0" ss:Width="154.5"/>
  <Row ss:StyleID="s23">
  <Cell><Data 
    ss:Type="String">First</Data></Cell>
  <Cell><Data 
   ss:Type="String">Middle</Data></Cell>
  <Cell><Data 
    ss:Type="String">Last</Data></Cell>
  <Cell><Data 
    ss:Type="String">Email</Data></Cell>
  </Row>
  <?php foreach( $rows as $row ) { ?>
  <Row>
  <Cell><Data 
     ss:Type="String"><?php echo( $row['first'] ); ?>
  </Data></Cell>
  <Cell><Data 
     ss:Type="String"><?php echo( $row['middle'] ); ?>
  </Data></Cell>
  <Cell><Data 
    ss:Type="String"><?php echo( $row['last'] ); ?>
  </Data></Cell>
  <Cell ss:StyleID="s21"><Data ss:Type="String">
  <?php echo( $row['email'] ); ?></Data></Cell>
  </Row>
  <?php } ?>
  </Table>
  <WorksheetOptions 
     xmlns="urn:schemas-microsoft-com:office:excel">
  <Print>
  <ValidPrinterInfo/>
  <HorizontalResolution>300</HorizontalResolution>
  <VerticalResolution>300</VerticalResolution>
  </Print>
  <Selected/>
  <Panes>
  <Pane>
  <Number>3</Number>
  <ActiveRow>1</ActiveRow>
  </Pane>
  </Panes>
  <ProtectObjects>False</ProtectObjects>
  <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
  </Worksheet>
  </Workbook>