var table = $('#table');
var root = $('#root').val() + '/';
tableLoader()

function tableLoader() {
    table.load(root + 'loop')
}

$('#save').click(function () {
    save();
})

function save() {
    let form = $('#form')
    $.ajax({
        method: 'post',
        url: root + 'save',
        data: form.serialize(),
        success: function (response) {
            if (response.result == 1) {
                tableLoader();
                $('.invalid-feedback').each(function () {
                    $(this).fadeOut(200)
                })
                document.getElementById("form").reset()
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 422) {
                let errors = jqXHR.responseJSON.errors;
                let value = Object.values(errors)
                let strName, strValue;
                $('.invalid-feedback').each(function () {
                    $(this).fadeOut(200)
                })
                for (strName in errors) {
                    strValue = errors[strName][0];
                    let div = $("input[name='"+ strName +"']");
                    div = div.parent().find('.invalid-feedback')
                    div.html(strValue)
                    div.fadeIn(200);
                }
            } else {
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        }
    });
}

function destory(id) {
    $.ajax({
        method: 'get',
        url: root + 'delete',
        data: {
            'id':id
        },
        success: function (response) {
            if (response.result == 1) {
                tableLoader();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 422) {
                let errors = jqXHR.responseJSON.errors;
                let value = Object.values(errors)
                let strName, strValue;
                $('.invalid-feedback').each(function () {
                    $(this).fadeOut(200)
                })
                for (strName in errors) {
                    strValue = errors[strName][0];
                    let div = $("input[name='"+ strName +"']");
                    div = div.parent().find('.invalid-feedback')
                    div.html(strValue)
                    div.fadeIn(200);
                }
            } else {
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        }
    });
}

function update(id) {
    let tr = $(`#tr_${id}`);
    let name = tr.find("input[name='name']").val()
    let count = tr.find("input[name='count']").val()
    let price = tr.find("input[name='price']").val()
    $.ajax({
        method: 'get',
        url: root + 'update',
        data: {
            'id':id,
            'name':name,
            'count':count,
            'price':price
        },
        success: function (response) {
            if (response.result == 1) {
                tableLoader();
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 422) {
                tableLoader()
            } else {
                console.log(JSON.stringify(jqXHR));
                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        }
    });
}
