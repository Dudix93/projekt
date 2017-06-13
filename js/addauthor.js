$(document).ready(function() {
	//tutaj wstawiamy kod JQuery, który zostanie uruchomiony
	//jak tylko dokument będzie gotowy do manipulowania jego elementami
	/**
		Własne metody do walidacji
	**/
	$.validator.addMethod('categoryname', function (value, element) {
		return /^[A-Za-z]+$/.test(value);
		}, 'Pole musi zawierać tylko litery!');

    $('#addauthor').validate({
		//reguły dla pola formularza
        rules: {
			//atrybut name: {reguły}
			imie: {
				//reguły - kolejność ma znaczenia
                required: true,
				categoryname: true,
				minlength: 2,
				maxlength: 50
            },
            nazwisko: {
				//reguły - kolejność ma znaczenia
                required: true,
				categoryname: true,
				minlength: 2,
				maxlength: 50
            }
        },
		//komunikaty dla pola formularza
		messages: {
			imie: {
				required: 'Pole wymagane',
				minlength: jQuery.validator.format("Pole nie moze byc puste!"),
				maxlength: jQuery.validator.format("Pole nie moze byc puste!")
			},
            nazwisko: {
				required: 'Pole wymagane',
				minlength: jQuery.validator.format("Pole nie moze byc puste!"),
				maxlength: jQuery.validator.format("Pole nie moze byc puste!")
            }

		},
        highlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
        },
        errorClass: 'has-error',
		validClass: 'has-success',
		//umiejscowienie elementu z błędem
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
		/**
			niestadardowa rekacja na kliknięcie submit,
			gdy są błędy,
			blokuje standradową akcję
		**/
		invalidHandler: function(event, validator) {
			// 'this' to referencja do form
			var errors = validator.numberOfInvalids();
			if (errors) {
			  var message = errors == 1
				? 'Nie wypełniono poprawnie 1 pola. Zostało podświetlone'
				: 'Nie wypełniono poprawnie ' + errors + ' pół. Zostały podświetlone';
			  $("div.alert-danger").html(message);
			  $("div.alert-danger").show();
			} else {
			  $("div.alert-danger").hide();
			}
		},
	});
});
