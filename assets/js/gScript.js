//$.fn.datepicker.defaults.format = "dd-mm-yyyy";
function gPrint(selector){
	
	$("#"+selector).printArea({
		mode:"popup",  //printable window is either iframe or browser popup           			
		popHt: 600 ,  // popup window height
		popWd: 500,  // popup window width
		popX: 0 ,  // popup window screen X position
		popY: 0 , //popup window screen Y position
		popTitle:"test", // popup window title element
		popClose: false,  // popup window close after printing
		strict: false 
		});
}

function gsPrint(emp_title,data,hide_print){

	var export_data = $("<center>"+data+"</center>").clone().find("."+hide_print).remove().end().html();
	var element = "<div>"+export_data+"</div>";
	
	$("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
		mode:"popup",  //printable window is either iframe or browser popup           			
		popHt: 600 ,  // popup window height
		popWd: 500,  // popup window width
		popX: 0 ,  // popup window screen X position
		popY: 0 , //popup window screen Y position
		popTitle:"test", // popup window title element
		popClose: false,  // popup window close after printing
		strict: false 
		});
}

//============= check duplicate reference =============

function isDupRef(ele,val,field,table,url){
	
	if(val!="" && field!="" && table!=""){
		$.ajax({
			url:url,
			type:"POST",
			dataType:"json",
			async:false,
			data:{				
				ref_val:val,
				ref_field:field,
				ref_table:table
			},
			success:function(data){				
				if(data.isDup>0){
					//$("#"+ele).focus();	
					$("#"+ele).val("");					
					alert("Value you entered is already exists.Please try again.");
				}					
			}

		});	
	}	
}  
//=============== format decimal place ================	
function number_format(val,decimal){	
	if(decimal==""){
		decimal=4;
	}	
	return parseFloat(val).toFixed(decimal);			
}
function convertSQLDate(date){
	var datepart=date.split("-");
	return datepart[2]+"-"+datepart[1]+"-"+datepart[0];
}
//==========================toasmsg============
function toasmsg(status,msgstr){
    Command: toastr[status](msgstr)
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-center",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1800",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
}


$.fn.clearForm = function() {
    // iterate each matching form
    return this.each(function() {
        // iterate the elements within the form
        $(':input', this).each(function() {
            var type = this.type, tag = this.tagName.toLowerCase();
            if (type == 'text' || type == 'password' || tag == 'textarea')
                this.value = '';
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    });
};




