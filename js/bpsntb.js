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
                        message: 'Silakan isikan nama'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'minimal 4 huruf dan maximal 30 huruf'
                    }
                }
            },
			kontak_email: {
                validators: {
                    notEmpty: {
                        message: 'silakan isikan alamat email'
                    },
                    emailAddress: {
                        message: 'alamat email tidak valid'
                    }
                }
            },
			kontak_subyek: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan judul pesan'
                    },
                    stringLength: {
                        min: 4,
                        max: 50,
                        message: 'minimal 4 huruf dan maximal 50 huruf'
                    }
                }
            },
			kontak_pesan: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan pesan'
                    }
                }
            },
			kontak_kode: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan kode pengaman'
                    },
					numeric: {
						message: 'isian harus berupa angka'
						}
                }
            }
        }
    });
});
$(document).ready(function() {
    $('#formUnitKerja').bootstrapValidator({
        message: 'Nilai tidak valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            unit_kode: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan kode'
                    },
					numeric: {
						message: 'isian harus berupa angka'
					},
                    stringLength: {
                        min: 5,
                        max: 5,
                        message: 'harus lima digit angka'
                    }
                }
            },
			unit_nama: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nama unit'
                    },
                    stringLength: {
                        min: 10,
                        max: 100,
                        message: 'minimal 10 huruf'
                    }
                }
            },
			unit_jenis: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih jenis unit'
                    }
                }
            }
        }
    });
});
$(document).ready(function() {
    $('#formAddPegawai').bootstrapValidator({
        message: 'Nilai tidak valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            pegawai_nip: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nip'
                    },
					numeric: {
						message: 'isian harus berupa angka'
					},
                    stringLength: {
                        min: 18,
                        max: 18,
                        message: 'harus 18 digit angka'
                    }
                }
            },
			pegawai_nama: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nama lengkap'
                    },
                    stringLength: {
                        min: 10,
                        max: 100,
                        message: 'minimal 10 huruf'
                    }
                }
            },
			pegawai_nama_panggilan: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nama panggilan'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'minimal 3 huruf'
                    }
                }
            },
			pegawai_nip_lama: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nip lama bps'
                    },
					numeric: {
						message: 'isian harus berupa angka'
					},
                    stringLength: {
                        min: 9,
                        max: 9,
                        message: 'harus 9 digit angka'
                    }
                }
            },
			pegawai_agama: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih agama'
                    }
                }
            },
			pegawai_jk: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih jenis kelamin'
                    }
                }
            },
			pegawai_tempat_lahir: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan tempat lahir'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'minimal 4 huruf'
                    }
                }
            },
      pegawai_tgl_lahir: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isi tgl lahir'
                      },
                      date: {
                       format: 'YYYY-MM-DD',
                       message: 'format YYYY-MM-DD'
                   }
                      }
                },
      pegawai_gol_cpns: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih gol cpns'
                          }
                      }
                },
      pegawai_gol_pns: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih gol terakhir'
                          }
                      }
                },
			pegawai_unit: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih jenis unit kerja'
                    }
                }
            },
      pegawai_jabatan: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih jabatan terakhir'
                          }
                      }
                },
      pegawai_status: {
            validators: {
                notEmpty: {
                    message: 'Silakan pilih status pegawai'
                      }
                  }
            }
        }
    });
});

$(document).ready(function() {
    $('#formAddUser').bootstrapValidator({
        message: 'Nilai tidak valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            user_nip: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih nip pegawai'
                    }
                }
            },
			    user_id: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan user ID'
                    },
                    stringLength: {
                        min: 3,
                        max: 20,
                        message: 'minimal 3 huruf'
                    }
                }
            },
            user_passwd: {
                  validators: {
                      notEmpty: {
                          message: 'Silakan isikan password'
                      },
                      stringLength: {
                          min: 4,
                          message: 'minimal 4 huruf'
                      },
                      identical: {
                        field: 'user_passwd2',
                        message: 'password tidak sama dengan konfirmasi password'
                    }
                  }
              },
              user_passwd2: {
                    validators: {
                        notEmpty: {
                            message: 'Silakan isikan konfirmasi password'
                        },
                        stringLength: {
                            min: 4,
                            message: 'minimal 4 huruf'
                        },
                        identical: {
                          field: 'user_passwd',
                          message: 'konfirmasi password tidak sama dengan password'
                      }
                    }
                },
            user_level: {
                      validators: {
                          notEmpty: {
                              message: 'Silakan pilih level user'
                          }
                      }
                  },
			user_status: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih status user'
                    }
                }
            }
        }
    });
});
