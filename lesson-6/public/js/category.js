$(document).on('click', '.category-link', function () {
    if (!$('#catalog-data').length) {
        return true;
    }
    const self = $(this);
    $.ajax({
        url: '/index.php?page=categories&action=index&id=' + self.attr('link') + '&asAjax=true',
        type: 'GET',
        dataType: 'json'
    }).done(function (data) {
        const categoryList = $('<ul></ul>');
        const catalogData = $('#catalog-data');
        catalogData.empty();
        for (let item in data.subcategories) {
            const category = $('<a>');
            category.attr('href', "/index.php?page=categories&id=" + data.subcategories[item].id);
            category.attr('link', data.subcategories[item].id);
            category.addClass('category-link');
            category.html(data.subcategories[item].name);
            categoryList.append('<li>' + category[0].outerHTML + '</li>');
        }
        catalogData.html(categoryList.html());
    });
    return false;
});
