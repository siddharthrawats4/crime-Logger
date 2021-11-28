$(document).ready(function(){

	$('#formdesk').submit(function()
	{
	event.preventDefault();
	var comptype=$('#comptype').val();
	var compdesp=$('#compdesp').val();
	var comptime=$('#comptime').val();
	var compdate=$('#compdate').val();
	var location=$('#location').val();
	var file1=$('#file1').val();
	alert(file1);

	$.post("complaint_server.php",
	{
		comptype: comptype,
		compdesp: compdesp,
		comptime :comptime,
		compdate :compdate,
		location :location,
		newfile : file1
	

	},
	function(response,status)
	{
	
		alert(response);
		if(response =="success")
		{
			swal("Reported","Your report has been recorded","success");
		}
	},"text");






});



});