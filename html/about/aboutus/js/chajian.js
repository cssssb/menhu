/*var value = document.querySelector("#selects".value);
var value2 =;
window.onload = function () {

    var Suggest1 = new InputSuggest({

        input: document.getElementById('selects'),
        data: ["u" + value]
    });                                                                                                                                                                                                                                                                                                     
    var Suggest2 = new InputSuggest({
        width: 300,
        opacity: 0.3,                                                                                                                                                  
        input: document.getElementById('bianma'),
        value: ["&#" + value2 + ";"]
    });
    }
    */
$("#selects").bind("input propertychange", function () {
    var code = parseInt($("#selects").value, 16).toString(10);
    $("#logo").innerHtml = "&#" + code;
});

