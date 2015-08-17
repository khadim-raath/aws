
$(document).ready(function () {
    // var base_url = $('#base_url').val();

    $("#old_domain_btn").on("click", function ()
    {
        var domain = $("#old_domain").val();
        domain = domain.trim();
        if (domain != "") {
            $.ajax(
                    {
                        url: "http://localhost/aws/test.php",
                        type: "POST",
                        data: {domain: domain},
                        success: function (data, textStatus, jqXHR)
                        {
                            var result = JSON.parse(data);
                            console.log(result);
                            var response = result['data'];
                            if (response) {

                                var html = "<div>";
                                html += "Id: " + response['Id'];
                                html += "</div>";

                                var ns = response['ns'];
                                if (ns) {
                                    for (var i = 0; i < ns.length; i++) {
                                        html += "<div>";
                                        html += "NS:" + (i + 1) + " " + ns[i];
                                        html += "</div>";
                                    }
                                    $('#result').html(html);
                                }
                                else {
                                    $('#result').html(" No result found");
                                }
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            console.log("error");
                        }
                    });
        }
        else {
            alert("Please enter the domain name!");
        }
    });
});