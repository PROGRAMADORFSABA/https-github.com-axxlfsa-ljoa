(function () {

    var limite = 8;
    
    function limitaInput(input) {
        if (input.value.length > limite) {
            input.value = input.value.substr(0, limite);
        }
    }
    
    $(document).on("propertychange change keyup", ".loading", function () {
        if (this.timerLimitInput) {
           clearTimeout(this.timer);
        }
    
        this.timerLimitInput = setTimeout(limitaInput, 10, this);//Timeout para evitar conflitos
    });

})();