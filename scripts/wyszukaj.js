$(function () {
    $("input").on("input.highlight", function () {
        // Determine specified search term
        var searchTerm = $(this).val();
        // Highlight search term inside a specific context
        $("#context").unmark().mark(searchTerm,
            {
                "acrossElements": true,
                "separateWordSearch": false,
            }
        );
    }).trigger("input.highlight").focus();
});