$(function() {
    $(".sort_tile li").sort(sort_li).appendTo('.listitems');
    function sort_li(a, b) {
        return ($(b).data('position')) < ($(a).data('position')) ? 1 : -1;
    }
});
