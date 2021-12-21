<script src="../../resources/assets/js/jquery/jquery-3.6.0.min.js"></script>
<script src="../../resources/assets/js/popper/popper.js"></script>

<script src="../../resources/assets/css/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
// var clicks = 0;

// function click() {
//     clicks += 1;
//     document.getElementById("clicks").innerHTML = clicks;
// };
$(document).ready(function() {
    const clicks = 0;
    $('#msglist').on('click', () => {
        clicks += 1;
        console.log(clicks)
        if (clicks > 0) {
            $('#unimsg').html(
                '<span class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline" id="unimsg">9</span>'
            );
            // $.ajax({

            //     success: function() {
            //         $('#unimsg').html(
            //             '<span class="badge bg-primary rounded-pill ms-1 d-none d-sm-inline" id="unimsg">9</span>'
            //         );

            //     }
            // });
        }
    });

});
</script>

</body>

</html>