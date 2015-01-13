$(document).ready(function(){

	//*******************************************
	/*	JQUERY DATA TABLE
	/********************************************/

	if( $('.datatable').length > 0 ) {
		$('.datatable').dataTable({
			"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
			"sPaginationType": "bootstrap",
			"oLanguage": {
				"sLengthMenu": "_MENU_ records per page"
			}
		});
	}


	//*******************************************
	/*	CUSTOMER SUPPORT TICKET TABLE
	/********************************************/

	if( $('#ticket-table').length > 0 ) {
		$('#ticket-table').dataTable({
			"sDom": "<'row'<'col-md-6'l><'col-md-6'f>r>t<'row'>",
			"bPaginate": false,
		});
	}


	//*******************************************
	/*	JQGRID INIT
	/********************************************/

	var grid = $('#jqgrid');

	if( $('#jqgrid').length > 0 ) {
		grid.jqGrid({
			url: 'php/jqgrid/server.php?q=1',
			mtype: 'GET',
			datatype: 'json',
			colNames: [' ', 'Inv No','Client ID', 'Date', 'Amount','Tax','Total', 'Closed', 'Ship Via', 'Notes'],
			colModel:[
				{ name:'myac', width:80, fixed:true, sortable:false, resize:false, formatter:"actions", 
					formatoptions:{
						keys: true,
					}
				},
				{ name:'invid', index:'invid', key:true, width:80, sorttype: "number", searchoptions:{sopt:['eq','ne','lt','le','gt','ge']} },
				{ name:'client_id', index:'client_id', width:100, editable:true,  },
				{ name:'invdate', index:'invdate', width:100, editable:true, sorttype:"date", 
					formatter:"date", 
					formatoptions:{
						srcformat:"ISO8601Short", // http://www.trirand.com/jqgridwiki/doku.php?id=wiki:predefined_formatter
						newformat:"m/d/Y"
					},
					searchoptions:{ 
						dataInit:function(el){
							setTimeout(function() {
								$(el).attr('placeholder', 'mm/dd/yyyy');
							}, 500);
						} 
					},
					editoptions:{
						dataInit:function(el){ 
							$(el).datepicker({format:'mm-dd-yyyy'})
							.on('changeDate', function(){
								$(this).datepicker('hide'); // force close the calendar
							}); 
						}
					}
				},
				{ name:'amount', index:'amount', align:"right", width: 85, editable:true, editrules: {number:true}, searchrules:{number:true}, searchoptions:{sopt:['eq','ne','lt','le','gt','ge']} },
				{ name:'tax', index:'tax', align:"right", width: 60, editrules: {number:true}, editable:true },
				{ name:'total', index:'total', align:"right", width: 100, editable:true, editrules: {number:true}, searchrules:{number:true}, searchoptions:{sopt:['eq','ne','lt','le','gt','ge']} },
				{ name:'closed', index:'closed', width:80, editable:true, edittype: "checkbox", editoptions:{value: "Yes:No"} },
				{ name:'ship_via', index:'ship_via', width: 85, editable:true, edittype: "select", editoptions:{value: "FedEx:FedEx;TNT:TNT"} },
				{ name:'note', index:'note', sortable:false, width: 200, editable:true, edittype: "textarea", editoptions:{rows: "2", cols: "20"} }
			],
			height: 300,
			rowNum: 10,
			rowList: [10, 20, 30],
			pager: 'jqgrid-pager',
			sortname: 'invid',
			viewrecords: true,
			sortorder: "asc",
			editurl: "php/jqgrid/server-edit.php",
			caption: "Working Editable Table",
			multiselect: true,
			onSelectRow: function(rowid){
				$("#"+rowid+"_invdate").datepicker({dateFormat:"m/d/Y"})
				.on('changeDate', function(){
					$(this).datepicker('hide'); // force close the calendar
				});
			}
		});

		resize_the_grid();

		if( $('#jqgrid').length > 0 ) {
			grid.jqGrid( 'navGrid', '#jqgrid-pager', { add:true, edit:true, view:true, del:true, search:true, refresh:true},
				{}, {}, {}, 
				{ multipleSearch: true, multipleGroup: true, /* showQuery: true  (nice for debugging) */ }
			);
		}
	}

	function resize_the_grid() {
		if( $('#jqgrid').length > 0 ) {
			grid.fluidGrid({base:'#jqgrid-wrapper', offset:-20});
		}
	}

	$(window).resize(resize_the_grid);
	
}); // end ready function