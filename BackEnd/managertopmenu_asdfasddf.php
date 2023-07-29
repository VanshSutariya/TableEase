
<div id="tabsdefault">			<ul>
<li>
					<table width = 100%>
					<tr valign = "center">
						<td width = 70%>
							<img src = "../logo-2.png" width = "200px" height = "40px"></img>
						</td>					
						<td width = "240px" align = "right">
							<td><img src = "../logo.png" width = "40px" height = "40px"></img></td>
							<td><img src = "../logo_our.png" width = "200px" height = "40px"></img></td>
							
						</td>
						
					
			</ul>
	

			<ul>
				<?if($page_belongs_to == "employee") {?><div id="tabselected"><?}?>
				<li><a href="view_tables.php" title="Employee"><span>Employee</span></a>
				<?if($page_belongs_to == "employee") {?></div><?}?>

				<?if($page_belongs_to == "payroll") {?><div id="tabselected"><?}?>
				<li><a href="payroll.php" title="Payroll"><span>Payroll</span></a>
				<?if($page_belongs_to == "payroll") {?></div><?}?>
				
				<?if($page_belongs_to == "inventory") {?><div id="tabselected"><?}?>
				<li><a href="employees.php" title="Inventory"><span>Inventory</span></a>
				<?if($page_belongs_to == "inventory") {?></div><?}?>
				
				<?if($page_belongs_to == "reports") {?><div id="tabselected"><?}?>
				<li><a href="analysis.php" title="Reports"><span>Reports/Analysis</span></a>
				<?if($page_belongs_to == "reports") {?></div><?}?>
				
				<?if($page_belongs_to == "items") {?><div id="tabselected"><?}?>
				<li><a href="asd.php" title="Items"><span>Menu Items</span></a>
				<?if($page_belongs_to == "items") {?></div><?}?>
				
				<li><a href="../timeout.php" title="Timeout"><span>Time Out</span></a>
				
				<li><a href="../logout.php" title="Logout"><span>Logout</span></a>

			</ul>
		</div>