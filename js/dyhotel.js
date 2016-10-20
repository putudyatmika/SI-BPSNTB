 $(document).ready(function(){

    // hide #back-top first
    $("#back-top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 80) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });

});

$(document).ready(function() {
	$('a[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Konfirmasi</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-success" data-dismiss="modal" aria-hidden="true">close</button><a class="btn btn-danger" id="dataConfirmOK"><span class="glyphicon glyphicon-trash"></span> hapus</a></div></div></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});

$(document).ready(function() {
	$('a[status-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Konfirmasi</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-success" data-dismiss="modal" aria-hidden="true">close</button><a class="btn btn-danger" id="dataConfirmOK"><span class="glyphicon glyphicon-ok"></span> OK</a></div></div></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('status-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});
$(document).ready(function() {
	$('#submit_menu[data-confirm]').click(function(ev) {
		ev.preventDefault();
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Konfirmasi</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-success" data-dismiss="modal" aria-hidden="true">close</button><a class="btn btn-danger" id="dataConfirmOK"><span class="glyphicon glyphicon-trash"></span> submit</a></div></div></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').click(function() {
				$('formProduk').serialize(),
			  $('#produk_check').submit();
		});
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});

$(document).ready(function() {
    $('#pilihsemua').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.pilih').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.pilih').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});

function getkategori(selObj, goToLocation) {
    eval("document.location.href = '" + goToLocation + "&kategori_id=" + selObj.options[selObj.selectedIndex].value + "'");
}
function getkat(selObj, goToLocation) {
    eval("document.location.href = '" + goToLocation + "&produk_kat=" + selObj.options[selObj.selectedIndex].value + "'");
}
function gettipe(selObj, goToLocation) {
    eval("document.location.href = '" + goToLocation + "&produk_tipe=" + selObj.options[selObj.selectedIndex].value + "'");
}
function getview(selObj, goToLocation) {
    eval("document.location.href = '" + goToLocation + "&produk_aktif=" + selObj.options[selObj.selectedIndex].value + "'");
}
$(document).ready(function() {
    $('#formKirimPesan').bootstrapValidator({
        message: 'This value is not valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            kontak_nama: {
                validators: {
                    notEmpty: {
                        message: 'Please fill this field'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'minimum 4 characters dan maximum 30 characters'
                    }
                }
            },
			kontak_email: {
                validators: {
                    notEmpty: {
                        message: 'Please fill this field'
                    },
                    emailAddress: {
                        message: 'email address not valid'
                    }
                }
            },
			kontak_subyek: {
                validators: {
                    notEmpty: {
                        message: 'Please fill this field'
                    },
                    stringLength: {
                        min: 4,
                        max: 50,
                        message: 'minimum 4 chracters and maximum 50 character'
                    }
                }
            },
			kontak_pesan: {
                validators: {
                    notEmpty: {
                        message: 'Please fill this field'
                    }
                }
            },
			kontak_kode: {
                validators: {
                    notEmpty: {
                        message: 'input capcha'
                    },
					numeric: {
						message: 'input only number'
						}
                }
            }
        }
    });
});
$(document).ready(function() {
    $('#formNewType').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            tipe_nama: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    },
					stringLength: {
                        min: 4,
                        max: 20,
                        message: 'min 4 and max 20 character'
                    }
                }
            },
			tipe_kode: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    },
					stringLength: {
                        min: 3,
                        max: 4,
                        message: 'min 3 and max 4 character'
                    }
                }
            },
			tipe_status: {
                validators: {
                    notEmpty: {
                        message: 'status is required'
                    }
                }
            }
			
        }
    });
});
$(document).ready(function() {
    $('#formNewGuest').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            guest_id: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    },
					stringLength: {
                        min: 4,
                        max: 20,
                        message: 'min 4 and max 20 character'
                    }
                }
            },
			guest_title: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    }
                }
            },
			guest_nama: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    },
					stringLength: {
                        min: 4,
                        max: 50,
                        message: 'min 4 and max 50 character'
                    }
                }
            },
			guest_negara: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    }
                }
            },
			guest_alamat: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    }
                }
            },
			guest_nohp: {
				
                validators: {
                    notEmpty: {
                        message: 'this value is empty'
                    },
					numeric: {
                        message: 'The value is not a numeric'
                    },
					stringLength: {
                        min: 8,
                        max: 20,
                        message: 'min 8 and max 20 numeric'
                    }
                }
            },
			guest_email: {
                validators: {
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
			guest_status: {
                validators: {
                    notEmpty: {
                        message: 'status is required'
                    }
                }
            }
			
        }
    });
});


		
$(document).ready(function() {
    $('#formGantiPassword').bootstrapValidator({
        message: 'This value is not valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            users_passwd: {
				
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    }
                }
            },
			users_passwd_baru: {
			
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					stringLength: {
                        min: 4,
                        message: 'password minimal 4 karakter'
                    },
					identical: {
                        field: 'users_passwd_baru_2',
                        message: 'password baru tidak sama dengan ulangi password baru'
                    }
                }
            },
			users_passwd_baru_2: {
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					identical: {
                        field: 'users_passwd_baru',
                        message: 'ulangi password baru tidak sama dengan password baru'
                    }
				}
            }
        }
    });
});
$(document).ready(function() {
    $('#formAddUser').bootstrapValidator({
       message: 'This value is not valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            users_id: {
				
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					stringLength: {
                        min: 4,
						max: 20,
                        message: 'username minimal 4 karakter max 20 karakter'
                    }
                }
            },
			users_passwd: {
			
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					stringLength: {
                        min: 4,
                        message: 'password minimal 4 karakter'
                    },
					identical: {
                        field: 'users_passwd_2',
                        message: 'password tidak sama dengan ulangi password'
                    }
                }
            },
			users_passwd_2: {
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					identical: {
                        field: 'users_passwd',
                        message: 'ulangi password tidak sama dengan password'
                    }
				}
            },
			users_nama: {
				
                validators: {
                    notEmpty: {
                        message: 'isian ini tidak boleh kosong'
                    },
					stringLength: {
                        min: 4,
						max: 20,
                        message: 'nama minimal 4 karakter max 20 karakter'
                    }
                }
            },
			users_level: {
				
                validators: {
                    notEmpty: {
                        message: 'silakan dipilih'
                    },
                }
            },
			users_status: {
				
                validators: {
                    notEmpty: {
                        message: 'silakan dipilih'
                    },
                }
            }
        }
    });
});
$(document).ready(function() {		
		$('#kmr_gdg_id').change(function() {
			var gedung_str = $(this).find('option:selected').val();
			var selectValues = gedung_str.split(';');
			$('#kamar_lantai').empty();
			$.each(selectValues, function(key, value) {   
			$('#kamar_lantai')
					 .append($("<option></option>")
					 .attr("value",key)
					 .text(value)); 
			});
           });
	});