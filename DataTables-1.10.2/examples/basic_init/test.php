<?php
	require_once("connect.php");
		
	$sql = "select * from Article order by dateline desc";
	
	$query = mysql_query($sql);
	
	if($query&& mysql_num_rows($query)){
		while ($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

	<title>DataTables example - Zero configuration</title>
	<link rel="stylesheet" type="text/css" href="../../media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../resources/demo.css">
	<style type="text/css" class="init">

	</style>
	<script type="text/javascript" language="javascript" src="../../media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">


$(document).ready(function() {
	$('#example').dataTable();
} );


	</script>
</head>

<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Zero configuration</span></h1>

			<div class="info">
				<p>DataTables has most features enabled by default, so all you need to do to use it with your own
				tables is to call the construction function.</p>

				<p>Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this
				example.</p>
			</div>

			<table id="#example" class="display" width="100%" >
			<thead>
				<tr>新闻</tr>
			</thead>
			<tbody>
			<?php 
				if(!empty($data)){
					foreach($data as $value){
			?>
			<tr style="height: 50px;"><td style="border-bottom:1px solid rgb(238, 238, 238);"><a href="newsDescription.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></td></tr>
			<?php
					}
				}
			?>
			</tbody>
			</table>

			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
			</ul>

			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this
					example:</p><code class="multiline brush: js;">$(document).ready(function() {
	$('#example').dataTable();
} );</code>

					<p>In addition to the above code, the following Javascript library files are loaded for use in this
					example:</p>

					<ul>
						<li><a href="../../media/js/jquery.js">../../media/js/jquery.js</a></li>
						<li><a href="../../media/js/jquery.dataTables.js">../../media/js/jquery.dataTables.js</a></li>
					</ul>
				</div>

				
				

				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note
					that this is just an example script using PHP. Server-side processing scripts can be written in any
					language, using <a href="//datatables.net/manual/server-side">the protocol described in the
					DataTables documentation</a>.</p>
				</div>
			</div>
		</section>
	</div>

	<section>
		<div class="footer">
			<div class="gradient"></div>

			<div class="liner">
				<h2>Other examples</h2>

				<div class="toc">
					<div class="toc-group">
						<h3><a href="./index.html">Basic initialisation</a></h3>
						<ul class="toc active">
							<li class="active"><a href="./zero_configuration.html">Zero configuration</a></li>
							<li><a href="./filter_only.html">Feature enable / disable</a></li>
							<li><a href="./table_sorting.html">Default ordering (sorting)</a></li>
							<li><a href="./multi_col_sort.html">Multi-column ordering</a></li>
							<li><a href="./multiple_tables.html">Multiple tables</a></li>
							<li><a href="./hidden_columns.html">Hidden columns</a></li>
							<li><a href="./complex_header.html">Complex headers (rowspan and colspan)</a></li>
							<li><a href="./dom.html">DOM positioning</a></li>
							<li><a href="./flexible_width.html">Flexible table width</a></li>
							<li><a href="./state_save.html">State saving</a></li>
							<li><a href="./alt_pagination.html">Alternative pagination</a></li>
							<li><a href="./scroll_y.html">Scroll - vertical</a></li>
							<li><a href="./scroll_x.html">Scroll - horizontal</a></li>
							<li><a href="./scroll_xy.html">Scroll - horizontal and vertical</a></li>
							<li><a href="./scroll_y_theme.html">Scroll - vertical with jQuery UI ThemeRoller</a></li>
							<li><a href="./comma-decimal.html">Language - Comma decimal place</a></li>
							<li><a href="./language.html">Language options</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../advanced_init/index.html">Advanced initialisation</a></h3>
						<ul class="toc">
							<li><a href="../advanced_init/events_live.html">DOM / jQuery events</a></li>
							<li><a href="../advanced_init/dt_events.html">DataTables events</a></li>
							<li><a href="../advanced_init/column_render.html">Column rendering</a></li>
							<li><a href="../advanced_init/length_menu.html">Page length options</a></li>
							<li><a href="../advanced_init/dom_multiple_elements.html">Multiple table control
							elements</a></li>
							<li><a href="../advanced_init/complex_header.html">Complex headers (rowspan /
							colspan)</a></li>
							<li><a href="../advanced_init/html5-data-attributes.html">HTML5 data-* attributes</a></li>
							<li><a href="../advanced_init/language_file.html">Language file</a></li>
							<li><a href="../advanced_init/defaults.html">Setting defaults</a></li>
							<li><a href="../advanced_init/row_callback.html">Row created callback</a></li>
							<li><a href="../advanced_init/row_grouping.html">Row grouping</a></li>
							<li><a href="../advanced_init/footer_callback.html">Footer callback</a></li>
							<li><a href="../advanced_init/dom_toolbar.html">Custom toolbar elements</a></li>
							<li><a href="../advanced_init/sort_direction_control.html">Order direction sequence
							control</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../styling/index.html">Styling</a></h3>
						<ul class="toc">
							<li><a href="../styling/display.html">Base style</a></li>
							<li><a href="../styling/no-classes.html">Base style - no styling classes</a></li>
							<li><a href="../styling/cell-border.html">Base style - cell borders</a></li>
							<li><a href="../styling/compact.html">Base style - compact</a></li>
							<li><a href="../styling/hover.html">Base style - hover</a></li>
							<li><a href="../styling/order-column.html">Base style - order-column</a></li>
							<li><a href="../styling/row-border.html">Base style - row borders</a></li>
							<li><a href="../styling/stripe.html">Base style - stripe</a></li>
							<li><a href="../styling/bootstrap.html">Bootstrap</a></li>
							<li><a href="../styling/foundation.html">Foundation</a></li>
							<li><a href="../styling/jqueryUI.html">jQuery UI ThemeRoller</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../data_sources/index.html">Data sources</a></h3>
						<ul class="toc">
							<li><a href="../data_sources/dom.html">HTML (DOM) sourced data</a></li>
							<li><a href="../data_sources/ajax.html">Ajax sourced data</a></li>
							<li><a href="../data_sources/js_array.html">Javascript sourced data</a></li>
							<li><a href="../data_sources/server_side.html">Server-side processing</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../api/index.html">API</a></h3>
						<ul class="toc">
							<li><a href="../api/add_row.html">Add rows</a></li>
							<li><a href="../api/multi_filter.html">Individual column searching (text inputs)</a></li>
							<li><a href="../api/multi_filter_select.html">Individual column searching (select
							inputs)</a></li>
							<li><a href="../api/highlight.html">Highlighting rows and columns</a></li>
							<li><a href="../api/row_details.html">Child rows (show extra / detailed
							information)</a></li>
							<li><a href="../api/select_row.html">Row selection (multiple rows)</a></li>
							<li><a href="../api/select_single_row.html">Row selection and deletion (single
							row)</a></li>
							<li><a href="../api/form.html">Form inputs</a></li>
							<li><a href="../api/counter_columns.html">Index column</a></li>
							<li><a href="../api/show_hide.html">Show / hide columns dynamically</a></li>
							<li><a href="../api/api_in_init.html">Using API in callbacks</a></li>
							<li><a href="../api/tabs_and_scrolling.html">Scrolling and jQuery UI tabs</a></li>
							<li><a href="../api/regex.html">Search API (regular expressions)</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../ajax/index.html">Ajax</a></h3>
						<ul class="toc">
							<li><a href="../ajax/simple.html">Ajax data source (arrays)</a></li>
							<li><a href="../ajax/objects.html">Ajax data source (objects)</a></li>
							<li><a href="../ajax/deep.html">Nested object data (objects)</a></li>
							<li><a href="../ajax/objects_subarrays.html">Nested object data (arrays)</a></li>
							<li><a href="../ajax/orthogonal-data.html">Orthogonal data</a></li>
							<li><a href="../ajax/null_data_source.html">Generated content for a column</a></li>
							<li><a href="../ajax/custom_data_property.html">Custom data source property</a></li>
							<li><a href="../ajax/custom_data_flat.html">Flat array data source</a></li>
							<li><a href="../ajax/defer_render.html">Deferred rendering for speed</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../server_side/index.html">Server-side</a></h3>
						<ul class="toc">
							<li><a href="../server_side/simple.html">Server-side processing</a></li>
							<li><a href="../server_side/custom_vars.html">Custom HTTP variables</a></li>
							<li><a href="../server_side/post.html">POST data</a></li>
							<li><a href="../server_side/ids.html">Automatic addition of row ID attributes</a></li>
							<li><a href="../server_side/object_data.html">Object data source</a></li>
							<li><a href="../server_side/row_details.html">Row details</a></li>
							<li><a href="../server_side/select_rows.html">Row selection</a></li>
							<li><a href="../server_side/jsonp.html">JSONP data source for remote domains</a></li>
							<li><a href="../server_side/defer_loading.html">Deferred loading of data</a></li>
							<li><a href="../server_side/pipeline.html">Pipelining data to reduce Ajax calls for
							paging</a></li>
						</ul>
					</div>

					<div class="toc-group">
						<h3><a href="../plug-ins/index.html">Plug-ins</a></h3>
						<ul class="toc">
							<li><a href="../plug-ins/api.html">API plug-in methods</a></li>
							<li><a href="../plug-ins/sorting_auto.html">Ordering plug-ins (with type
							detection)</a></li>
							<li><a href="../plug-ins/sorting_manual.html">Ordering plug-ins (no type
							detection)</a></li>
							<li><a href="../plug-ins/range_filtering.html">Custom filtering - range search</a></li>
							<li><a href="../plug-ins/dom_sort.html">Live DOM ordering</a></li>
						</ul>
					</div>
				</div>

				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full
					information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extras">extras</a> and
					<a href="http://www.datatables.net/plug-ins">plug-ins</a> which extend the capabilities of
					DataTables.</p>

					<p class="copyright">DataTables designed and created by <a href=
					"http://www.sprymedia.co.uk">SpryMedia Ltd</a> &#169; 2007-2014<br>
					DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>