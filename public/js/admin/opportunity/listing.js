$(document).ready(function(){
	$('#opportunityTable').bootstrapTable({
		method: 'get',
	    url: '/admin/opportunity/getOpportunityListing',
	    cache: false,
	    pagination: true,
	    pageSize: 15,
	    pageList: [15, 25, 50, 100, 200],
	    sidePagination : 'server',
	    columns: [{
		        field: 'projectName',
		        title: 'Project Name ',
		        align: 'left',
		        valign: 'middle',
		        formatter: projectLink
	        },
	        {
		        field: 'inactive',
		        title: 'Inactive',
		        align: 'left',
		        valign: 'middle',
		        formatter: inactiveFormatter
	        },
	        {
		        field: 'funded',
		        title: 'Funded',
		        align: 'left',
		        valign: 'middle',
		        formatter: fundedFormatter
	        },
	        {
		        field: 'completed',
		        title: 'Completed',
		        align: 'left',
		        valign: 'middle',
		        formatter: completedFormatter
	        },
	        {
		        field: 'state',
		        title: 'State',
		        align: 'left',
		        valign: 'middle'
	        },
	        {
		        field: 'city',
		        title: 'City',
		        align: 'left',
		        valign: 'middle'
	        },
	        {
		        field: 'loanAmount',
		        title: 'Loan Amount',
		        align: 'left',
		        valign: 'middle'
	        },
	        {
		        field: 'id',
		        title: 'Action',
		        align: 'center',
		        valign: 'middle',
		        clickToSelect: false,
		        formatter: operateFormatter
	        }
		]
    });

	function projectLink(value,row) {
		var link = "<a href=\"/admin/opportunity/view/"+row.id+"\">"+value+"</a>";
		return link;
	}

	function operateFormatter(value,row) {
		var link = "<a href=\"/admin/opportunity/edit/"+row.id+"\">"+
			" Edit</a>";
		return link;
	}

	function inactiveFormatter(value,row){
		var valueStr = '';
		if(value == 1){
			valueStr = '<svg class="glyph stroked checkmark" style=\'height:20px;width:20px;color:#0dda15;\'><use xlink:href="#stroked-checkmark"/></svg>';
		}
		return valueStr;
	}

	function fundedFormatter(value,row){
		var valueStr = '';
		if(value == 1){
			valueStr = '<svg class="glyph stroked checkmark" style=\'height:20px;width:20px;color:#0dda15;\'><use xlink:href="#stroked-checkmark"/></svg>';
		}
		return valueStr;
	}

	function completedFormatter(value,row){
		var valueStr = '';
		if(value == 1){
			valueStr = '<svg class="glyph stroked checkmark" style=\'height:20px;width:20px;color:#0dda15;\'><use xlink:href="#stroked-checkmark"/></svg>';
		}
		return valueStr;
	}
});