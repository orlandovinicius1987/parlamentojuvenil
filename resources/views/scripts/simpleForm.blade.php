<script>

    jQuery(document).ready(function()
    {
        $(document).on("change", '#city-edit', function(e)
        {
            console.log('changed');

            var school = $(this).val();

            $.ajax({
                type: 'GET',
                url: '/schools/' + school,
                dataType: 'json',
                success: function(json)
                {
                    console.log(json);
                    var $el = $("#school-edit");
                    $el.empty(); // remove old options
                    $el.append($("<option></option>")
                            .attr("value", '').text('SELECIONE A ESCOLA'));
                    $.each(json, function(key, value) {
                        $el.append($("<option></option>")
                                .attr("value", value.name).text(value.name));
                    });
                }
            });
        });
    });

</script>
