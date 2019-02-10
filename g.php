<script type="text/javascript">

    function calculateTotal() {
        
        
        //totalR = +document.addem.tb1.value +  +4;
        //totalR = eval( document.addem.tb1.value*0.5);
        //totalR = document.addem.tb1.value  -8;
        totalR = eval( document.addem.tb1.value*0.5);

        document.getElementById('ans').value = totalR;
    }

</script>

<form name="addem" action="" id="addem" >   
    <span id="update">100</span>
    <p><input type="text" name="tb1" onkeyup="calculateTotal()"/>first textbox</p>
    <p><input type="text" name="tb2" id='ans' />Second textbox</p>
    <input type="hidden" name="total" value="100" />
</form>

