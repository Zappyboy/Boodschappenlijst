<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 4</title>
</head>
<body>
<button onclick="removeLI()">Remove</button>
<ul id="list">
    <li>Aardappelen</li>
    <li>Aardbeien</li>
    <li>3 pakken melk</li>
    <li>yoghurt</li>
</ul>

<script>

    var items = document.querySelectorAll("#list li"),
        tab = [], liIndex;

    // populate tab with li data
    for(var i = 0; i < items.length; i++){
        tab.push(items[i].innerHTML);
    }

    // get li index using tab array on li click event
    for(var i = 0; i < items.length; i++){

        items[i].onclick = function(){

            liIndex = tab.indexOf(this.innerHTML);
            console.log(this.innerHTML + " INDEX = " + liIndex);
        };

    }

    function removeLI(){

        items[liIndex].parentNode.removeChild(items[liIndex]);

    }

</script>

</body>
</html>
