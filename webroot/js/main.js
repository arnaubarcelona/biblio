var app_path = location.protocol + '//' + location.hostname + '/proves/';

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
            checkAuthorTypesExists(e.params.data);
        }
    });
});

function checkAuthorTypesExists(data)
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
                    console.log('author not found.');
                    isAuthorFound = false;
                }

                if ( $.type(result.author_types["not_exist"]) !== 'undefined' ) {
                    console.log('author type not found.');
                    isAuthorTypeFound = false;
                }
            }
        }
    });
}