//custom Js
$(document).ready(function(){
//alert("Hello! I am an alert box!");
//console.log('Hi');

  //$("#new_data").DataTable();


var table =  $('#new_data').DataTable( {
    // "searching": false,
    // "paging": true,
    // "info": false,
    // "lengthChange":false
    "oLanguage": { "sSearch": "" },
    "Processing": true,
    "ServerSide": true,
    "ajax" : {
    "url" : "index.php/Welcome/get_data",
    "type" : "POST",
    "dataSrc": "data_table",
    // "dataType": "json",
    // "cache": false,
    // "contentType": "application/json; charset=utf-8"
    },
    "aoColumns": [
        { "data": "r_no" },
        { "data": "date" },
        { "data": "project_name" },
        { "data": "client_name" },
        { "data": "billing_status" },
        { "data": "time_taken" },
        { "data": "comments" }
    ]
});






//$('input[type=search]').addClass('s_icon');

$('#new_data_filter label').addClass('s_icon');


$(".add-plus").click(function(){
    $(".addnew").show();
    $("body").css("overflow", "hidden");
});

$("#box").click(function(){
    $(".addnew").hide();
    $("body").css("overflow", "auto");
});

$("#add_new").submit(function(e){
  e.preventDefault();
	//var data=$("#add_new").serialize();
  // var date = $('#date').val();
  // var p_name = $('#p_name').val();
  // var client = $('#client').val();
  // var bill = $('#bill').val();
  // var time = $('#time').val();
  // var comment = $('#comment').val();

  $.ajax({
		type:"POST",
		url:"index.php/Welcome/push_data",
    //dataType:'json',
    cache:false,
    //data:{dateof:date,project_name:p_name, client_name:client, billing_status:bill, time_taken:time, comments:comment},
    data: $("#add_new").serialize(),
    success:function(){
      alert('Data Inserted');
      table.ajax.reload();
      $('#add_new')[0].reset();
    },
    error: function(e) {
      console.table(e);
      alert('Try again');
    }
	});
});


$('.point').click(function() {
    $(".drop-down").toggle();
})

$( document ).on( 'click', function ( e ) {
    if ( $( e.target ).closest(".point").length === 0 ) {
        $(".drop-down").hide();
    }
});

$( document ).on( 'keydown', function ( e ) {
    if ( e.keyCode === 27 ) {
        $(".drop-down").hide();
    }
});



});
