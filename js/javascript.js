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
	$('.delete').click(function(e){
		e.preventDefault();
		$(this).parents("tr").fadeOut(250);
	});
	$('.atc-button').click(function(e){
		e.preventDefault();
		$(this).attr("value", "Item Added!");
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
});