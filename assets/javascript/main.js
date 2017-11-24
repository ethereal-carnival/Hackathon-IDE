function execute() {
    $.ajax({
        url: "/assets/functions/api.php",
        data: {
            language : document.getElementById("choice").value,
            source_code : document.getElementById("code").value,
            InputData : document.getElementById("input_data").value
        },
        type: 'post',
        success: function (output) {
            document.getElementById("output_data").innerHTML = output;
        }
    });
}
