$(function(){
	//固定当前位置
	$("#sidebar").portamento({ 
    	gap:0, 
    	disableWorkaround:true 
	});
});

//列表全选
function check_all(ck) {
	if ($(ck).attr('checked')) {
		$("input[name='id[]']").each(function() {
			$(this).attr('checked','checked');
		});
	} else {
		$("input[name='id[]']").each(function() {
			$(this).removeAttr('checked');
		});
	}
}