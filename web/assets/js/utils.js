// The Template Loader. Used to asynchronously load templates located in separate .html files
window.templateLoader = {		
    load: function(views, callback) {
        var deferreds = [];
        $.each(views, function(index, view) {
            if (window[view]) {
                deferreds.push($.get('assets/tpl/' + view + '.html', function(data) {
                    window[view].prototype.template = _.template(data);
                }, 'html'));
            } else {
                console.log('Template ' + view + " not found");
            }
        });

        $.when.apply(null, deferreds).done(callback);
    },
};

window.utils = {
	
	displayValidationErrors: function (messages) {
	    for (var key in messages) {
	        if (messages.hasOwnProperty(key)) {
	            this.addValidationError(key, messages[key]);
	        }
	    }
	    //this.showAlert('Warning!', 'Fix validation errors and try again', 'alert-warning');
	},
	
	addValidationError: function (field, message) {		
	    var controlGroup = $('#formGroup' + field);	    
	    controlGroup.addClass('has-error');
	    $('#msg' + field).text(message);	    
	    $('#saveAccountButton').prop('disabled', true);
	    $('#deleteAccountButton').prop('disabled', true);
	},
	
	removeValidationError: function (field, model) {	    
		var controlGroup = $('#formGroup' + field);
		controlGroup.removeClass('has-error');
	    controlGroup.addClass('has-success');
	    $('#msg' + field).text('');
	    
	    var check = model.validateAll();
        
        if (check.isValid === true) {
        	$('#saveAccountButton').prop('disabled', false);
    	    $('#deleteAccountButton').prop('disabled', false);            
        }
	    
	},
	
	/*Alert main*/
	showAlert: function(title, text, klass) {
	    $('.alert').removeClass("alert-danger alert-warning alert-success alert-info");
	    $('.alert').addClass(klass);
	    $('.alert').html('<strong>' + title + '</strong> ' + text);	    
	    
	    if(klass == 'alert-success'){
	    	$('.alert').append(' <a href="#accounts" class="alert-link">Back to account list</a>');
	    }
	    
	    $('.alert').show();
	},
	
	hideAlert: function() {		
	    $('.alert').hide();
	}

};