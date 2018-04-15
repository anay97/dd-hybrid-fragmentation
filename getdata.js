jQuery(document).ready(function(){	
jQuery.ajax({url: "get_data_db.php", success: function(result){
        var x=result;
		sendData(x);
    }});
})

function sendData(x){
		x=x.replace(/\\/g,'');
		for(i=0;i<4;i++){
			x=x.replace('"{','{');
			x=x.replace('"}"', '"}');
			x=x.replace('""','');
		}
		x=JSON.parse(x);
		addData(x);
}
function addData(x){
	console.log(x);
	var i=1;
	for(var y in x){
		var nm=x[y].name;		
		var c=x[y].contact;		
		var loc=x[y].location;		
		jQuery('#table-data').append('<tr><td>'+ i++ +'</td><td>'+nm+'</td><td>'+c+'</td><td>'+loc+'</td><td><a href="delete.php?id='+y+'&loc='+loc+'">Delete</a></td></tr>')
	}
	//jQuery('#table-data').append()
}