$(document).ready(function() {
    $('#formProdukNew').bootstrapValidator({
        message: 'This value is not valid',
       feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            produk_kategori: {
                validators: {
                    notEmpty: {
                        message: 'Silakan pilih produk kategori'
                    }
                }
            },
			produk_nama: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan nama produk'
                    }
                }
            },
			produk_file: {
                validators: {
                    notEmpty: {
                        message: 'Silakan isikan photo produk'
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
            }
        }
    });
});