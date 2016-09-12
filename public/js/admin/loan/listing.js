$(document).ready(function(){
	$('#opportunityTable').bootstrapTable({
		method: 'get',
	    url: '/admin/loan/getLoanListing',
	    cache: false,
	    pagination: true,
	    pageSize: 15,
	    pageList: [15, 25, 50, 100, 200],
	    sidePagination : 'server',
	    rowStyle: rowStyleTable,
	    columns: [{
		        field: 'projectName',
		        title: 'Project Name ',
		        align: 'left',
		        valign: 'middle',
		        formatter: projectLink
	        },{
		        field: 'image',
		        title: 'Image',
		        align: 'left',
		        valign: 'middle'
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
	        },{
		        field: 'ltv',
		        title: 'LTV',
		        align: 'left',
		        valign: 'middle'
	        },{
		        field: 'apr',
		        title: 'APR',
		        align: 'left',
		        valign: 'middle'
	        },
	        {
		        field: 'term',
		        title: 'Term',
		        align: 'center',
		        valign: 'middle',
		        clickToSelect: false
	        },
	        {
		        field: 'status',
		        title: 'Status',
		        align: 'center',
		        valign: 'middle',
		        clickToSelect: false,
		        formatter: statusFormatter
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

	function rowStyleTable(row, index) {
		var classes = ['highlight'];
		var rcstatus = row.status;
		var role = parseInt($("input[name=userRoleId]").val());
		if(typeof rcstatus != "undefined"){
			if(rcstatus != 1 && (role == 2 || role == 1)){
				return {
					classes: classes[0]
				};
			}
		}
		return {};
	}

	function projectLink(value,row) {
		var link = "<a href=\"/admin/loan/view/"+row.id+"\">"+value+"</a>";
		return link;
	}

	function operateFormatter(value,row) {
		var link = "<a href=\"/admin/loan/edit/"+row.id+"\">"+
			" Edit</a>";
		return link;
	}

	function statusFormatter(value,row){
		var valueStr = 'NA';
		if(value == 1){
			valueStr = 'Inactive';
		}else if(value == 2){
			valueStr = 'Funded';
		}else if(value == 3){
			valueStr = 'Matured';
		}
		return valueStr;
	}

	function isActiveCompanyFormatter(value) {
		var status;
		if(value ==1)
			status = "<span class=\"label label-success\">Active</span>";
		else
			status = "<span class=\"label label-danger\">Disabled</span>";
		return status;
	}
});