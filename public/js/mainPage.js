$(document).ready(function(){
    var offset = 5; // Initial offset to load more news items
    
    // Initially hide all news items beyond the first 5
    $(".container.rounded-3.p-0.mb-3:gt(4)").hide();

    // AJAX to fetch total number of news items
    $.ajax({
        url: '/views/main_page.php',
        type: 'GET',
        success: function(response) {
            var totalNews = parseInt(response); // Parse response as an integer
            // Load More button click event
            $("#loadMoreBtn").click(function(){
                $(".container.rounded-3.p-0.mb-3:lt(" + offset + ")").show(); // Show next batch of news items
                offset += 5; // Increment offset
                if (offset >= totalNews) {
                    $("#loadMoreBtn").hide(); // Hide button when all news items are shown
                }
            });
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});
