// works with jquery. moves an element up or down in the dom tree - fired by onclick() or a similar event

function moveBlockUp(){
        var target = event.target;
        var target = $(target).parent();
        $(target).insertBefore($(target).prev());
    }

    function moveBlockDown(){
        var target = event.target;
        var target = $(target).parent();
        $(target).insertBefore($(target).prev());
    }
