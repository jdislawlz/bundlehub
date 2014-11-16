$(document).ready(function () {
	$("#cart, #edit").click(function(e){
		e.preventDefault();
		$("#cart-pop").fadeToggle();
	});
	$("#cart-pop").click(function(e){
		if(e.target.id == "cart-pop" || e.target.id == "continue"){
			$("#cart-pop").fadeToggle();
		}
		else{ return; }
	});
    
	$("#login").click(function(e){
		e.preventDefault();
        $("#login-pop .create-inner").fadeOut(function(){
            $("#login-pop .login-inner").fadeIn();
    		$("#login-pop").fadeToggle();
        });
	});
	$("#login-pop").click(function(e){
		if(e.target.id == "login-pop"){
			$("#login-pop").fadeToggle();
		}
		else { return; }
	});
    
    $("#new-account").click(function(e){
        e.preventDefault();
        $("#login-pop .login-inner").fadeOut(function(){
            $("#login-pop .create-inner").fadeIn();
        });
    });
    $("#back-login").click(function(e){
        e.preventDefault();
        $("#login-pop .create-inner").fadeOut(function(){
            $("#login-pop .login-inner").fadeIn();
        });
    });
	
    $('.pay-choice input').click(function(){
		if($('input[value=other]').prop("checked") === true){
			$("#other-text").fadeIn(250);
		}
		else{ $("#other-text").fadeOut(250);}
	});
	$('#nav_account').click(function(e){
		e.preventDefault();
		$('#client_selection').fadeOut(250, function(){
			$('.client_item').hide();
			$('#client_account').show();
			$('#client_selection').fadeIn(250);
		});
	});
	$('#nav_payment').click(function(e){
		e.preventDefault();
		$('#client_selection').fadeOut(250, function(){
			$('.client_item').hide();
			$('#client_payment').show();
			$('#client_selection').fadeIn(250);
		});
	});
	$('#nav_address').click(function(e){
		e.preventDefault();
		$('#client_selection').fadeOut(250, function(){
			$('.client_item').hide();
			$('#client_address').show();
			$('#client_selection').fadeIn(250);
		});
	});
	$('#nav_orders').click(function(e){
		e.preventDefault();
		$('#client_selection').fadeOut(250, function(){
			$('.client_item').hide();
			$('#client_orders').show();
			$('#client_selection').fadeIn(250);
		});
	});
	$(document).on("click", ".edit", function(e){
		e.preventDefault();
		for (i=2;i<=6;i++){
			var cell = $(this).parent().parent().find('td:eq('+i+')');
			var data = $(this).parent().parent().find('td:eq('+i+')').html();
			cell.html("<input style='width:95%;' type='text' value='"+data+"'>");
		}
		$(this).parent().html("<a class='update' href=#>update</a><br><a class='delete' href=#>delete</a>");
	});
	$(document).on("click", ".delete", function(e){
		var url = window.location.href+"?deleteitem=true";
		var iden = $(this).parent().parent().find('td:eq(1)').html();
		url+="&id="+iden;
		$(this).parent().html("<a class='edit' href=#>x</a>");
		console.log(url);
		window.location.href = url;
	});
	$(document).on("click", ".update", function(e){
		var url = window.location.href+"?edititem=true";
		var iden = $(this).parent().parent().find('td:eq(1)').html();
		url+="&id="+iden;
		for (i=2;i<=6;i++){
			var name = $(this).parent().parent().find('td:eq('+i+')').attr("data");
			var data = $(this).parent().parent().find('td:eq('+i+') input').val();
			console.log(name);
			url+="&"+name+"="+data;
		}
		$(this).parent().html("<a class='edit' href=#>x</a>");
		console.log(url);
		window.location.href = url;
	});
	$(document).on("click", ".editu", function(e){
		e.preventDefault();
		for (i=2;i<=6;i++){
			var cell = $(this).parent().parent().find('td:eq('+i+')');
			var data = $(this).parent().parent().find('td:eq('+i+')').html();
			cell.html("<input style='width:95%;' type='text' value='"+data+"'>");
		}
		$(this).parent().html("<a class='updateu' href=#>update</a><br><a class='deleteu' href=#>delete</a>");
	});
	$(document).on("click", ".deleteu", function(e){
		var url = window.location.href+"?deleteuser=true";
		var iden = $(this).parent().parent().find('td:eq(1)').html();
		url+="&id="+iden;
		$(this).parent().html("<a class='edit' href=#>x</a>");
		console.log(url);
		window.location.href = url;
	});
	$(document).on("click", ".updateu", function(e){
		var url = window.location.href+"?edituser=true";
		var iden = $(this).parent().parent().find('td:eq(1)').html();
		url+="&id="+iden;
		for (i=2;i<=5;i++){
			var name = $(this).parent().parent().find('td:eq('+i+')').attr("data");
			var data = $(this).parent().parent().find('td:eq('+i+') input').val();
			console.log(name);
			url+="&"+name+"="+data;
		}
		$(this).parent().html("<a class='edit' href=#>x</a>");
		console.log(url);
		window.location.href = url;
	});
    
    $('.edit-button').click(function(e){
        e.preventDefault();
        var select = $(this).attr("data");
        $(this).parent().parent().siblings('tr').hide(function(){
            $('.title').show();
        });
        $(this).removeClass('edit-button');
        console.log('runn');
    });

    $('.search-fix input[type=submit]').click(function(e){
    	e.preventDefault();
    	if($('.search-fix input[type=text]').val()){
	    	var search = $('.search-fix input[type=text]').val();
    		window.location = "search.php?search="+search;
    	} else {
    		alert('Please enter something');
    	}
    });
});