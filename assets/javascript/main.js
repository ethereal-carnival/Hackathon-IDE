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
            alert("Hi");
            document.getElementById("output_data").innerHTML = output;
        }
    });
}

function save() {
    $.ajax({
        url: "/assets/functions/save.php",
        data: {
            $U_id : document.getElementById("hidden").innerHTML,
            source_code : document.getElementById("code").value
        },
        type: 'post',
        success: function (output) {
            alert("Successfully saved");
        }
    });
}
