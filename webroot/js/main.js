if (location.hostname == 'localhost') {
    var app_path = location.protocol + '//' + location.hostname + ':' + location.port + '/';
} else {
    var app_path = location.protocol + '//' + location.hostname + '/proves/';
}

$(document).ready(function () {
    $('.multiple_autocomplete').select2({
        tags: true,
        tokenSeparators: [';'],
        createTag: function (params) {
            return {
                id: params.term,
                text: params.term,
                // add indicator flag
                isNew : true
            };
        }
    }).on("select2:select", function(e) {
        if(e.params.data.isNew) {
            // Check author/author_types exists
            checkAuthorTypesExists(e.params.data, e.target);
        }
    });
});

function checkAuthorTypesExists(data, targetObj)
{
    $.ajax({
        url: app_path + "books/check-author-types-exists",
        type: 'post',
        data: {
            'data': data
        },
        success: function (result) {
            if (result.status != 'error') {
                var isAuthorFound = true;
                var isAuthorTypeFound = true;

                if ( $.type(result.author["not_exist"]) !== 'undefined' ) {
                    isAuthorFound = false;
                }

                if ( $.type(result.author_type["not_exist"]) !== 'undefined' ) {
                    isAuthorTypeFound = false;
                }

                if ( !isAuthorFound ) {
                    if (confirm(result.author["name"] + " is not in the list of authors, do you want to add it?") == true) {
                        addNewAuthor(result.author["name"], function (ajaxResp) {
                            if (ajaxResp.status == 'success') {
                                alert(ajaxResp.message);
                            } else {
                                alert(ajaxResp.message);
                            }
                        });
                    } else {
                        // Remove last element from dropdown
                        $(targetObj).find('option[data-select2-tag="true"]').last().remove();
                    }
                }
            }
        }
    });
}

function addNewAuthor(authorName, callBack)
{
    $.ajax({
        url: app_path + "authors/add",
        type: 'post',
        data: {
            'name': authorName
        }
    }).done(function(result) {
        callBack(result);
    }).fail(function() {
        callBack(result);
    });
}