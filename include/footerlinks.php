    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/in-view/dist/in-view.min.js"></script>




    <!-- Page plugins -->
    <script src="assets/vendor/autosize/dist/autosize.min.js"></script>
    <script src="assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>



    <!-- Theme JS -->

    <script src="assets/js/theme.min.js"></script>
            <script type="text/javascript">

        $('#suggestInpute').on('keyup keypress blur change', function(e) {
        // e.type is the type of event fired
            var searchstring = $('#suggestInpute').val();

            if (searchstring != '' && searchstring.length > 2) {

            $.ajax({
                type: 'POST',
                url: './process/suggestion.php', 
                data: {searchstring:searchstring},       
                success:function(resp){
                    $('#suggestionList').html(resp);
                    console.log(resp);     

                }
            });

            }

        });

    </script>              
