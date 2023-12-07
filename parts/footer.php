</div>

<!-- Подключение скриптов Bootstrap (jQuery должен быть подключен перед Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.maphilight.min.js"></script><!-- map JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

<!-- Ваши скрипты -->
<script>
    function loadIFrame(page) {
        //console.log('Loading page:', page);
        fetch(page)
            .then(response => response.text())
            .then(data => {
                //console.log('Data received:', data);
                const contentContainer = document.getElementById('contentContainer');
                contentContainer.innerHTML = data;
                document.getElementById('myIframe').src = page;
            })
            .catch(error => console.error('Error:', error));
    }
</script>

<script type="text/javascript">

    //функция подсветки блоков map-карты area
    $(function() {
        $('.rgb').maphilight();
    });

    //функция при загрузке страницы глобального объекта window
    window.onload = function(){

//если в localStorage браузера записанное значение rgb out2 не null, то
        if (localStorage.out2 !== null) {

//записываем значение цвета localStorage в переменную
            var color = localStorage.out2;

//console.log(color);

//и управляемому индификатору id добавляем стиль background со значением переменной localStorage
            document.getElementById('particles-js').style = 'background: rgba('+color+',1);';

//и записываем значение переменной в инпут out2, где код HEX
            document.f.out2.value = color;

//записываем значение переменной в инпут inputr ползунка
            document.f.inputr.value = '100';
        }
    };

    //вызываемая функция onclick по участку map-area
    function br(valrgb){

//и записываем значение onclick в инпут out2, где код HEX
        document.f.out2.value=valrgb;

//console.log(valrgb);

//управляемый индификатор id записываем в переменную для его управления
        var control_backround = document.getElementById('particles-js');

//и управляемому индификатору id добавляем стиль background со значением onclick, где код RGB
        control_backround.style = 'background: rgba('+valrgb+',1);';

//и записываем в localStorage браузера значение onclick
        localStorage.out2 = valrgb;

//записываем значение переменной в инпут inputr ползунка
        document.f.inputr.value = '100';
    };


    //вызываемая функция onmousedown левой клавишей мыши по участку map-area
    function bh(valhex){

//и записываем значение onmousedown в инпут out, где код HEX
        document.f.out.value=valhex;

//записываем значение переменной в инпут inputr ползунка
        document.f.inputr.value = '100';
    };


    //вызываемая функция changeColor при изменении инпута out , где код HEX
    function changeColor() {

//записываем в переменную значение инпута out
        var inputOut = document.f.out.value;

//если значение инпута out равно трём или шести, то
        if(inputOut.length == 3 || inputOut.length == 6) {

//управляемый индификатор id записываем в переменную для его управления
            var control_backround = document.getElementById('particles-js');

//и управляемому индификатору id добавляем стиль background со значением инпута, где код HEX
            control_backround.style = 'background: #'+inputOut+';';

//а у второго импута значение обнуляем, где код RGB, что бы не было путаницы со значениями
            document.f.out2.value = '';
        }
    };

    //вызываемая функция при изменении range инпута ползунка
    function resizeInput(){

//записываем значение инпута RGB
        var inputOutTwo = document.f.out2.value;

//если значение инпута RGB не ноль, то
        if (inputOutTwo !== null) {

//записываем в переменную значение input-range как управление
            var inputRange = document.getElementById('inputr').value;
//console.log(inputRange);

//записываем в переменную индификатор управляемого div
            var opacityColor = document.getElementById('particles-js');

//присваеваем стиль прозрачности управляемого div
            opacityColor.style = 'background: rgba('+inputOutTwo+',0.'+inputRange+');';

//и записываем в localStorage браузера значение input-range
            localStorage.inputr = inputRange;
        }
    };

</script>

</body>
</html>
