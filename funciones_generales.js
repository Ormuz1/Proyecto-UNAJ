$(document).ready(() => {
    let import_statements = $("[data-import]");
    import_statements.each(function() { 
        $(this).load($(this).attr("data-import"));
    });
});