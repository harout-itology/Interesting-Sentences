$(document).ready(function(){
    // cache button click event
    $('#searchBtn').click(function(e){
        e.preventDefault(); // Prevent default form submission behavior
        search();
    });

    // cache form submit event
    $('#searchForm').submit(function(e){
        e.preventDefault(); // Prevent default form submission behavior
        search();
    });

    // send a request to the backend
    function search(){
        // get the entered keyword from the input
        var keyword = $('#searchInput').val().trim();

        // post an ajax request
        $.ajax({
            url: 'php/search.php',
            type: 'POST',
            data: {keyword: keyword},
            success: function(response){
                // print the response in the table
                $('#resultTable').html(response);
            }
        });
    }
});